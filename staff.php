<?php

$conn = new mysqli("localhost","root","","staff");

if($conn->connect_error){
    die("Connection Failed");
}

$result = $conn->query("SELECT * FROM staff_details");

?>

<!DOCTYPE html>
<html>
<head>

<title>Staff Listing</title>

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

.main h1{
    color:white;
    margin-bottom:30px;
}

.card-container{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    gap:20px;
}

.card{
    background:rgba(255,255,255,0.15);
    backdrop-filter:blur(10px);
    border-radius:20px;
    padding:20px;
    text-align:center;
    color:white;
}

.card img{
    width:120px;
    height:120px;
    border-radius:50%;
    object-fit:cover;
    margin-bottom:15px;
}

.btn{
    display:inline-block;
    margin-top:15px;
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

<h1>Company Staff Listing</h1>

<div class="card-container">

<?php while($row = $result->fetch_assoc()) { ?>

<div class="card">

<img src="<?php echo $row['photo']; ?>">

<h2><?php echo $row['name']; ?></h2>

<p><?php echo $row['position']; ?></p>

<p><?php echo $row['department']; ?></p>

<a class="btn" href="profile.php?id=<?php echo $row['id']; ?>">
View Profile
</a>

</div>

<?php } ?>

</div>

</div>

</div>

</body>
</html>