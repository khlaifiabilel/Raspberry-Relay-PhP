<html>
<head>
        <meta name="viewport" content="width=device-width" />
        <title>GPIO control</title>
        <style>
        .button {
                  background-color: #4CAF50;
                  border: none;
                  color: Black;
                  padding: 15px 32px;
                  text-align: center;
                  text-decoration: none;
                  display: inline-block;
                  font-size: 16px;
                  margin: 4px 2px;
                  cursor: pointer;
        }
        </style>
</head> 
<body style="text-align:center">
        <h1 style="color: Black">GPIO control</h1>
        <font color="Black">Relay 1:</font>
        <form method="get" action="gpio.php">
                <input type="submit" class="button" value="ON 1" name="on">
                <input type="submit" class="button" value="OFF 1" name="off">
        </form>
        <font color="Black">Relay 2:</font>
        <form method="get" action="gpio.php">
                <input type="submit" class="button" value="ON 2" name="on2">
                <input type="submit" class="button" value="OFF 2" name="off2">
        </form>
        <font color="Black">Relay 3:</font>
        <form method="get" action="gpio.php">
                <input type="submit" class="button" value="ON 3" name="on3">
                <input type="submit" class="button" value="OFF 3" name="off3">
        </form>
        <font color="Black">Relay 4:</font>
        <form method="get" action="gpio.php">
                <input type="submit" class="button" value="ON 4" name="on4">
                <input type="submit" class="button" value="OFF 4" name="off4">
        </form>
<?php
         $setmode2 = shell_exec("/usr/local/bin/gpio -g mode 2 out");
	 $setmode3 = shell_exec("/usr/local/bin/gpio -g mode 3 out");
	 $setmode4 = shell_exec("/usr/local/bin/gpio -g mode 4 out");
	 $setmode27 = shell_exec("/usr/local/bin/gpio -g mode 27 out");
         if(isset($_GET['on'])){
                 $gpio_on = shell_exec("/usr/local/bin/gpio -g write 2 0");
                 echo '<p style="color: Black">relay 1 is on</p>';
         }
         else if(isset($_GET['off'])){
                 $gpio_off = shell_exec("/usr/local/bin/gpio -g write 2 1");
                 echo '<p style="color: Black">relay 1 is off</p>';
         }else if(isset($_GET['on2'])){
                 $gpio_off = shell_exec("/usr/local/bin/gpio -g write 3 0");
                 echo '<p style="color: Black">relay 2 is on</p>';
         }else if(isset($_GET['off2'])){
                 $gpio_off = shell_exec("/usr/local/bin/gpio -g write 3 1");
                 echo '<p style="color: Black">relay 2 is off</p>';
         }else if(isset($_GET['on3'])){
                 $gpio_off = shell_exec("/usr/local/bin/gpio -g write 4 0");
                 echo '<p style="color: Black">relay 3 is on</p>';
         }else if(isset($_GET['off3'])){
                 $gpio_off = shell_exec("/usr/local/bin/gpio -g write 4 1");
                 echo '<p style="color: Black">relay 3 is off</p>';
         }else if(isset($_GET['on4'])){
                 $gpio_off = shell_exec("/usr/local/bin/gpio -g write 27 0");
                 echo '<p style="color: Black">relay 4 is on</p>';
         }else if(isset($_GET['off4'])){
                 $gpio_off = shell_exec("/usr/local/bin/gpio -g write 27 1");
                 echo '<p style="color: Black">relay 4 is off</p>';
         }else if(isset($_GET['on5']))
	$temp = exec('cat /root/Adafruit_Python_DHT/examples/AdafruitDHT.py 11 26 |grep Temp=');
	$temp = explode('Temp=',$temp);
	$temp = round($temp,2);
	echo $temp;
?>
</body>
</html>

