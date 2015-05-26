<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?><br>
Your password is: <?php echo $_POST["psw"]; ?><br>
Your sex is: <?php echo $_POST["sex"]; ?><br>

<?php
if (isset($_POST["bikequestion"]))
	echo "Answer to do you have a bike: yes<br>";
else
	echo "Answer to do you have a bike: no<br>";

if (isset($_POST["carquestion"]))
	echo "Answer to do you have a car: yes<br>";
else
	echo "Answer to do you have a car: no<br>";
?>

icecream: <?php echo $_POST["icecream"]; ?><br>


</body>
</html> 
