<?php
   include("config.php");
   if (isset($_POST['submit'])) {
    $Emp_id=$_POST['Emp_id'];
	$Emp_name=$_POST['Emp_name'];
	$Contact_no=$_POST['Contact_no'];
	$Position=$_POST['Position'];
	$Date_of_joining=$_POST['Date_of_joining'];
	$Med_Insurance=$_POST['Med_Insurance'];
	$sql = "INSERT INTO Employee(Emp_id,Emp_name,Contact_no,Position,Date_of_joining,Med_Insurance)VALUES
	('$Emp_id','$Emp_name','$Contact_no','$Position','$Date_of_joining','$Med_Insurance')";
	$result = $conn->query($sql);
	if($result==TRUE){
		echo "Recorded successfully";
	}else{
		echo "Error:".$sql."<br>". $conn->error;
	}
	$conn->close();
	}
	

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	
	$Emp_name = $_POST['Emp_name'];
	$Contact_no = $_POST['Contact_no'];
    $Date_of_joining = $_POST['Date_of_joining'];
	
	$errors = '';

	
    // Validate the name field
    if (empty($name)) {
        $errors["name"] = "Please enter your name";
    }


    // Validate the date field
    if (empty($date)) {
        $errors["date"] = 'Date is required';
    } 
	
    // Validate the contact field
    if (empty($contact)) {
        $errors["contact"] = 'Contact is required';
    }
	
	if (empty($errors)) {
        // Process the form data
        // ...
        // Redirect to a success page or perform other actions
    }

}
?>

<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script>
	function phonenumber(inputtxt)
{
  var phoneno = /^\d{10}$/;
  if((inputtxt.value.match(phoneno))
        {
      return true;
        }
      else
        {
        alert("Enter a valid 10 digit number");
        return false;
        }
}
</script>
<link rel="stylesheet" href="stylesheets.css">	
</head>
<body>
<div class="container-fluid">
<div class="row">
<div class="col-sm-12" id="grad1" style="background-color:#F48D16;"><br>

<div class="col-sm-3" id="grad2"  style="background-color:white;"><br>
<center>
<a href="home2.php" style="color:#F48D16"> <span id="gly" class="glyphicon glyphicon-home" > </span></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<a href="empview.php" style="color:#F48D16"> <span id="gly" class="glyphicon glyphicon-file" > </span></a><br><br>
<h2 style="text-align: center; font-family:Times New Roman; color:#F48D16"><b>  Employee  </b></h2><br><br><br>
<img src="SYnlogo.png" style="width:100%; height:40%;"><br><br><br><br><br> 
<button type="submit" style="background-color:white; border-color:#ffffff;" ><a href="loginnsyn.php" style="color:#F48D16"> Logout</a></button>
</center>
<br><br><br><br><br><br>   
</div> 

<div class="col-sm-9">
<div class="row-sm-4">
	<ul> 
		<li><a href="home2.php">Home</a></li> 
		<li><a href="#">Adding Employees  &#x25BE;</a>
			<ul class="dropdown"> 
				<li><a href="empinsert.php">Employee</a></li> 
				<li><a href="driverinsert.php">Driver</a></li> 
				<li><a href="vendinsert.php">Vendor</a></li> 
			<li><a href="techinsert.php">Techician</a></li> 
			</ul> 
			</li>

		<li><a href="equmacinsert.php">Equipment & Machinery</a></li>

		<li><a href="#">Issues  &#x25BE;</a>
			<ul class="dropdown"> 
				<li><a href="issinsert.php">Log an issue</a></li> 
				<li><a href="issview.php">View issue</a></li>  
			</ul> 
			</li>

		<li><a href="#">Materials  &#x25BE;</a>
			<ul class="dropdown"> 
				<li><a href="houmatinsert.php">Housekeeping Materials</a></li> 
				<li><a href="matinsert.php">Raw Materials</a></li>  
			</ul> 
			</li>

		<li><a href="mondevinsert.php">Monitoring Devices</a></li>

		<li><a href="#">Sanitization  &#x25BE;</a>
			<ul class="dropdown"> 
				<li><a href="colstoinsert.php">Cold Storage</a></li> 
				<li><a href="perhyginsert.php">Employee</a></li> 
			<li><a href="vechinsert.php">Vehicle</a></li>
			</ul> 
			</li>

		<li><a href="techinsert.php">Techician</a></li>

		<li><a href="transinsert.php">Transport</a></li>
	</ul>

	<div class="row-sm-14, grad3">
	<center>
	<div style = "padding:10px">              			   
<form action = "" method ="post" data-toggle="validator" role="form">		
<label hidden><h4>Employee ID:</h4></label>


<label><h4>Employee Name:</h4></label>
<input class="form-control" type="text" name="name" id="name" value="
<?php echo isset($name) ? $name : ''; ?>">
<?php if (isset($errors["name"])) { ?>
            <span class="error"><?php echo $errors["name"]; ?></span>
        <?php } ?>

<label><h4>Contact no :</h4></label>
<input class="form-control" type="number" name="contact" id="Contact_no" value="
<?php echo isset($name) ? $name : ''; ?>">
<?php if (isset($errors["name"])) { ?>
            <span class="error"><?php echo $errors["name"]; ?></span>
        <?php } ?>
 

<div class="custom-select">
<label><h4>Employee Position:</h4></label>
		<select class="form-control" name="Position" id="position" >
		
		<option value=-1 selected>---Choose Position---</option>
		<option value="Admin">Admin</option>
		<Option value="Manager">Manager</option>
		<Option value="Employee">Employee</option>
		</select>
		
</div>


<label><h4>Date of joining:</h4></label>
<input class="form-control" type="date" name="date" value="
<?php echo isset($name) ? $name : ''; ?>">
<?php if (isset($errors["name"])) { ?>
            <span class="error"><?php echo $errors["name"]; ?></span>
        <?php } ?>


<label><h4>Medical Insurance:</h4></label><br>
<input type="radio" id="Yes" name="Med_Insurance" value="Yes" >Yes
<input type="radio" id="No" name="Med_Insurance" value="No">No<br>
<button name="submit" class="button button4">Submit</button>
</form>              
</div>	
</center> 
</div>	
</div>
</div>			
</body>
</html>