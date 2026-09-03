<?php

$conn = new mysqli("localhost","root","","staff");

if($conn->connect_error){
    die("Connection Failed");
}

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $position=$_POST['position'];
    $department=$_POST['department'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $salary=$_POST['salary'];
    $address=$_POST['address'];
    $joining_date=$_POST['joining_date'];
    $skills=$_POST['skills'];
    $photo=$_POST['photo'];

    $sql="INSERT INTO staff_details
    (name,position,department,email,phone,salary,address,joining_date,skills,photo)
    VALUES
    ('$name','$position','$department','$email','$phone','$salary','$address','$joining_date','$skills','$photo')";

    if($conn->query($sql))
    {
        echo "<script>
        alert('Staff Added Successfully');
        window.location='staff.php';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Add Staff</title>

<style>

body{
    margin:0;
    font-family:Arial;
    background:url('images/background.jpg');
    background-size:cover;
    background-attachment:fixed;
}

.overlay{
    background:rgba(0,0,0,0.7);
    min-height:100vh;
    padding:30px;
}

.form-box{
    width:700px;
    margin:auto;
    background:white;
    padding:30px;
    border-radius:15px;
}

input, textarea{
    width:100%;
    padding:12px;
    margin-top:8px;
    margin-bottom:15px;
}

button{
    background:#2563eb;
    color:white;
    border:none;
    padding:12px 25px;
    cursor:pointer;
    border-radius:5px;
}

</style>

</head>

<body>

<div class="overlay">

<div class="form-box">

<h2>Add New Staff</h2>

<form method="POST">

Name:
<input type="text" name="name" required>

Position:
<input type="text" name="position" required>

Department:
<input type="text" name="department" required>

Email:
<input type="email" name="email" required>

Phone:
<input type="text" name="phone" required>

Salary:
<input type="text" name="salary" required>

Address:
<textarea name="address" required></textarea>

Joining Date:
<input type="date" name="joining_date" required>

Skills:
<input type="text" name="skills" required>

Photo Path:
<input type="text" name="photo"
placeholder="images/staff16.jpg" required>

<button type="submit" name="submit">
Add Staff
</button>

</form>

</div>

</div>

</body>
</html>