<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<title>Lottery System</title>
</head>
<style type="text/css">
	body{
		font-family: Times New Roman;
		background-image: url("bg.jpeg");
		background-repeat: no-repeat;
		background-size: 100% 100%;
		background-attachment: fixed;
	}
	h1{
		margin-top: 10px;
	}
	#user{
		margin-top: 40px;
		margin-bottom: 30px;
		display: block;
	}
	.btn{
		margin-top: 10px;
	}
	p{
		margin-top: 30px;
	}
</style>
<body>
<center><h1>Register for Lottery</h1>
<form method="post" action="">
	<p id="user" style="color: black;background-color: white; width: 28.5%; font-size: 20px;font-weight: 800;">Your Name:
		<input type="text" name="name" maxlength="25" size="21.5" value="" required style="margin-left: 20px; border-width: 0;">
	</p>
	<p style="color: black; background-color: white; width: 29%; font-size: 20px;font-weight: 800;">Ticket Number:
		<input type="text" name="tno" size="20" maxlength="30" value="" required style="border-width: 0px;">
	</p>
	<p>
	<button type="submit" name="button" id="btn" class="btn btn-success" style="color: white;width: 20%; font-size: 22px;font-weight: 500;">Submit</button>
    </p>
   </form>
	<div class="container">
<p style="color: red; background-color: white; width: 60%; font-size: 22px; font-weight: 700;">Don't refresh the page till you have submitted more chances!
<br><font style="color: black; background-color: white; width: 60%; font-size: 22px;font-weight: 500;">Increase Your Chance of Winning By Submitting Multiple Entries- </font></p>
	<button type="submit" name="button1" id="btn1" class="btn btn-secondary" style="color: white; width: 20%; font-size: 22px;font-weight: 500;">More Chances</button>
<p style="color: black; background-color: white; width: 60%; font-size: 22px;font-weight: 500;">Total no. of chances = <span id="display">0</span></p>
</div>

<script type="text/javascript">
		
	var count = 0;
	var btn = document.getElementById("btn1");
	var disp = document.getElementById("display");
	var page="home.php";
        btn.onclick = function () {
            count++;
if(count===1){
		disp.innerHTML= count + "<br>Submit two times to increase your chance of Winning.";
}else if (count===2) {
	disp.innerHTML= count + "<br>You have submitted two times. Your Chance of Winning has increased by double.";
}else if (count===3) {
	disp.innerHTML= count + "<br>Your Total Submissions are 3, therefore you have been disqualified.";
}else if(count===4){
	disp.innerHTML= count + "<br>Submit one more time to increase your chance of Winning.";
}else if (count===5) {
	disp.innerHTML= count + "<br>You have submitted more than three times. Your Chance of Winning has increased more.";
}else if (count<=6){
	disp.innerHTML= count + "<br>You cannot submit entries more than 5.";
}

        }
</script>

<?php
error_reporting(0);
$name=$_POST['name'];
$tno=$_POST['tno'];

$con= new mysqli("localhost","root","","lottery");
if($con->connect_error){
	die("Failed to connect:".$con->connect_error);
}else{
	$query="insert into entries values('$name','$tno')";
	$data=mysqli_query($con,$query);
	if($data){
		//echo "data inserted";

		}else{
		echo "failed to insert";
		}
}

?>

</center>
</body>
</htm