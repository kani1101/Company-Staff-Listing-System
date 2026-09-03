<?php

$conn = new mysqli("localhost","root","","staff");

if($conn->connect_error){
    die("Connection Failed");
}

$id = $_GET['id'];

$result = $conn->query("SELECT * FROM staff_details WHERE id=$id");

$row = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html>
<head>

<title>Employee Profile</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family:Arial;
    background-image:url('images/background.jpg');
    background-repeat:no-repeat;
    background-size:cover;
    background-position:center;
    background-attachment:fixed;
}

.overlay{
    width:100%;
    min-height:100vh;
    background:rgba(0,0,0,0.7);
}

.sidebar{
    width:250px;
    height:100vh;
    background:#111827;
    position:fixed;
    padding-top:20px;
}

.sidebar h2{
    color:white;
    text-align:center;
    margin-bottom:30px;
}

.sidebar a{
    display:block;
    color:white;
    padding:15px 20px;
    text-decoration:none;
    font-size:18px;
}

.sidebar a:hover{
    background:#2563eb;
}

.main{
    margin-left:260px;
    padding:30px;
}

.profile{
    background:rgba(255,255,255,0.15);
    backdrop-filter:blur(10px);
    border-radius:20px;
    padding:30px;
    color:white;
}

.profile img{
    width:180px;
    height:180px;
    border-radius:50%;
    object-fit:cover;
    margin-bottom:20px;
}

.profile h1{
    margin-bottom:20px;
}

.profile p{
    margin:12px 0;
    font-size:18px;
}

.btn{
    display:inline-block;
    margin-top:20px;
    background:#2563eb;
    color:white;
    padding:10px 20px;
    text-decoration:none;
    border-radius:8px;
}

.btn:hover{
    background:#1d4ed8;
}

</style>

</head>

<body>

<div class="overlay">

<div class="sidebar">

<h2>NovaTech Solutions</h2>

<a href="index.php">🏠 Dashboard</a>
<a href="staff.php">👨‍💼 Staff Listing</a>

</div>

<div class="main">

<div class="profile">

<center>

<img src="<?php echo $row['photo']; ?>">

<h1><?php echo $row['name']; ?></h1>

</center>

<hr><br>

<p><b>Position :</b> <?php echo $row['position']; ?></p>

<p><b>Department :</b> <?php echo $row['department']; ?></p>

<p><b>Email :</b> <?php echo $row['email']; ?></p>

<p><b>Phone :</b> <?php echo $row['phone']; ?></p>

<p><b>Salary :</b> ₹<?php echo $row['salary']; ?></p>

<p><b>Address :</b> <?php echo $row['address']; ?></p>

<p><b>Joining Date :</b> <?php echo $row['joining_date']; ?></p>

<p><b>Skills :</b> <?php echo $row['skills']; ?></p>

<a class="btn" href="staff.php">Back</a>

</div>

</div>

</div>

</body>
</html>