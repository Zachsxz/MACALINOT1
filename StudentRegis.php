<!DOCTYPE html>
<html>
<head>
<title>Student Registration Form</title>
<style>
       body{
           font-family: Arial;
           background-color: #f2f2f2;
       }
       .container{
           width: 500px;
           margin: auto;
           background-color: white;
           padding: 20px;
           border: 1px solid black;
       }
       h2{
           text-align: center;
       }
       input{
           width: 100%;
           padding: 8px;
           margin-top: 5px;
           margin-bottom: 10px;
       }
       select{
           width: 100%;
           padding: 8px;
           margin-bottom: 10px;
       }
       .btn{
           background-color: blue;
           color: white;
           border: none;
           padding: 10px;
       }
</style>
</head>
<body>
<div class="container">
<h2>Student Registration Form</h2>
<form method="POST">
       Student Name:
<input type="text" name="name">
       Age:
<input type="number" name="age">
       Course:
<input type="text" name="course">
       Gender:
<select name="gender">
<option>Male</option>
<option>Female</option>
</select>
       Address:
<input type="text" name="address">
<input type="submit" value="Register" class="btn">
</form>
<?php
   if($_SERVER["REQUEST_METHOD"] == "POST")
   {
       $name = $_POST['name'];
       $age = $_POST['age'];
       $course = $_POST['course'];
       $gender = $_POST['gender'];
       $address = $_POST['address'];
       echo "<h3>Student Information</h3>";
       echo "Name: " . strtoupper($name) . "<br>";
       echo "Age: " . $age . "<br>";
       echo "Course: " . strtoupper($course) . "<br>";
       echo "Gender: " . $gender . "<br>";
       echo "Address: " . ucwords($address) . "<br>";
   }
   ?>
</div>
</body>
</html>