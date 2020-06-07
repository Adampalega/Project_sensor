<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Specyfikacja</th>
      <th scope="col">Dane</th>
     
    </tr>
  </thead>
  <tbody>
	<tr>
      		<th scope="row">1</th>
      		<td>Version of the Raspberry Pi</td>
      		<td>
		<?php
		$output = shell_exec('cat /proc/version');
		echo "<pre>$output</pre>";
		?>
		</td>
	</tr>
        
	<tr>
      		<th scope="row">2</th>
     	 	<td>IP addresses</td>
      		<td>
		<?php
		$output = substr((shell_exec('hostname -I')), 0, 13);
		$output2 = substr((shell_exec('hostname -I')), 14, 14);
		echo "<pre>$output</pre>";
		echo "<pre>$output2</pre>";
		?>
		</td>
 	</tr>
	<tr>
 		<th scope="row">3</th>
      		<td>Temperature of the CPU</td>
      		<td>
		<?php
		$output = substr((shell_exec('vcgencmd measure_temp')), 5, 9);
		echo "<pre>$output</pre>";
		?>
		</td>

    	</tr>

      	<tr>
 		<th scope="row">4</th>
      		<td>Memory split between the CPU and GPU</td>
      		<td>
		<?php
		$output = shell_exec('vcgencmd get_mem arm && vcgencmd get_mem gpu');
		echo "<pre>$output</pre>";
		?>
		</td>

    	</tr>


   	<tr>
      		<th scope="row">5</th>
     	 	<td>Information about the available disk space</td>
      		<td>
		<?php
		$output = shell_exec('df -h');
		echo "<pre>$output</pre>";
		?>
		</td>

   	 </tr>

  	</tbody>
	</table>
