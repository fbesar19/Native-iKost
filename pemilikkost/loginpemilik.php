<html>
<head>
  <link rel="stylesheet" href="../ikost.css">
</head>
<nav style="box-shadow: 1px 1px 1px 1px grey;">
	<ul>
		<img src="../Icon/logo3.png" class="glogo">
		<li style="float: right; margin-right:50px;"><a href="loginpemilik.php"> Login </a></li>
		<li style="float: right"><a href="Register.php"> Register </a></li>
		<!-- <li><a href="#"> Bantuan </a></li> -->
	</ul>
</nav>

<body style="background: #d6d7d8">
  <div class="badan" style="width: 30%; box-shadow: 1px 1px 1px 1px grey">
    <form method="post" action="cekpemilik.php">
      <div class="labregis" style="margin-bottom: 40px;"> Login </div>
          <label><b>Username</b></label>
          <input class="loginput" type="text" placeholder="Masukan Username" name="username" required>
          <label><b>Password</b></label>
          <input class="loginput" style="margin-bottom: 50px;" type="password" placeholder="Masukan Password" name="pass1" required>
          <input class="logbutton" name="register" type="submit" value="Login">
    </form>
  </div>
</body>
</html>
