import mysql.connector
import config
import time

time.sleep(60)

mydb = mysql.connector.connect(
  host= config.host,
  user= config.user,
  passwd= config.passwd,
  db= config.db,
  autocommit=True
)

mycursor = mydb.cursor()

sql = "DELETE FROM Measurements ORDER BY measure_id DESC limit 10"

mycursor.execute(sql)

mydb.commit()

print(mycursor.rowcount, "record(s) deleted")