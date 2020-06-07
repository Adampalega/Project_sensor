import pymysql
import RPi.GPIO as GPIO
import dht11
import time
import urllib2
import json
import os
import mysql.connector
import config

def dht11_inside():
    """ returning temperature inside and sensor id 
    """
    # initialize GPIO
    GPIO.setwarnings(False)
    GPIO.setmode(GPIO.BCM)
    GPIO.cleanup()

    # read data using pin 17
    instance = dht11.DHT11(pin = 17)
    result = instance.read()

    while(True):
        result = instance.read()
        if result.is_valid():
            return((float(result.humidity),float(result.temperature)))
        else:
            print("Error: %d" % result.error_code)
        time.sleep(1)

def measureFromAirly():
    apikey = config.apikey
    url = config.url
    req = urllib2.Request(url)
    req.add_header('apikey', apikey)
    resp = urllib2.urlopen(req)
    content = resp.read()
    data=json.loads(content)
    data_current = data["current"]["values"]
    labels = []
    mesure = []

    for i in data_current:
        items =  i.values()
        labels.append(items[0])
        mesure.append(items[1])

    return mesure

def soil():
    """measure if plant is watered 
    if is - 0 
    if is not - 1
    """
    PIN = 21
    GPIO.setmode(GPIO.BCM)
    GPIO.setup(PIN, GPIO.IN, pull_up_down=GPIO.PUD_DOWN)
    STATUS=GPIO.input(PIN)
    return str(STATUS)


def getMesureFromAirlyById(id):
    return (id, float(airlyMeasure[id - 4]))


def toDb(measure):
    """saving measurements to table Measurments

    arg:
    - measure: tuple must have two arguments: sensor_id(int), measure(float)
    """
    connection = pymysql.connect(
        host= config.host,
        user= config.user,
        passwd= config.passwd,
        db= config.db, 
        autocommit=True)

    cursor = connection.cursor()
    sql=("select * from Sensors")
    cursor.execute(sql)
    data = cursor.fetchall()
    print(data)

    try:
        with cursor:
            sql = "INSERT INTO `Measurements`(sensor_id, measure) values({},{});".format(measure[0],measure[1])
            cursor.execute(sql)
    finally:
        connection.close()

def tempCpu():
	'''
	function returns temperature of raspberry Pi CPU
	'''
	return float(os.popen("vcgencmd measure_temp").read()[5:9])

def baseCpu():
	'''
	function inserts temperature of CPu to database 
	'''
	mydb = mysql.connector.connect(
  	host= config.host,
    user= config.user,
    passwd= config.passwd,
    database= config.db
	)

	mycursor = mydb.cursor()
	temperatura = tempCpu()

	sql = """INSERT INTO Measurements(sensor_id, measure) VALUES (10, %f)""" % (temperatura)
	mycursor.execute(sql)


	mydb.commit()


airlyMeasure = measureFromAirly()

dht11InsideList = dht11_inside()

toDb((2,dht11InsideList[0]))
toDb((1,dht11InsideList[1]))

for i in range(4,10):
    toDb(getMesureFromAirlyById(i))

toDb((3,soil()))

baseCpu()
