<!DOCTYPE html>
<html>
<head>

<title>Company Staff Listing System</title>

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

/* DARK OVERLAY */

.overlay{
    width:100%;
    min-height:100vh;
    background:rgba(0,0,0,0.7);
}

/* SIDEBAR */

.sidebar{
    width:250px;
    height:100vh;
    background:#111827;
    position:fixed;
    left:0;
    top:0;
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

/* MAIN CONTENT */

.main{
    margin-left:260px;
    padding:30px;
    color:white;
}

.main h1{
    margin-bottom:20px;
    font-size:40px;
}

/* CARDS */

.card-container{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    gap:20px;
}

.card{
    background:rgba(255,255,255,0.15);
    backdrop-filter:blur(8px);
    padding:30px;
    border-radius:20px;
    text-align:center;
    box-shadow:0 0 10px rgba(0,0,0,0.3);
}

.card h2{
    font-size:35px;
    margin-bottom:10px;
}

.card p{
    font-size:18px;
}

</style>

</head>

<body>

<div class="overlay">

<!-- SIDEBAR -->

<div class="sidebar">

<h2>NovaTech Solutions</h2>

<a href="index.php">🏠 Dashboard</a>
<a href="staff.php">👨‍💼 Staff Listing</a>
<a href="add_staff.php">➕ Add Staff</a>
<a href="#">📊 Reports</a>
<a href="#">📁 Departments</a>
<a href="#">⚙ Settings</a>
<a href="#">🚪 Logout</a>

</div>

<!-- MAIN CONTENT -->

<div class="main">

<h1>Welcome to NovaTech Solutions</h1>

<div class="card-container">

<div class="card">
<h2>15+</h2>
<p>Total Employees</p>
</div>

<div class="card">
<h2>6</h2>
<p>Departments</p>
</div>

<div class="card">
<h2>Active</h2>
<p>Company Status</p>
</div>

</div>

</div>

</div>

</body>
</html>