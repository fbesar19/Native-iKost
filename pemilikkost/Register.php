<link rel="stylesheet" type="text/css" href="../ikost.css">

<nav style="box-shadow: 1px 1px 1px 1px grey;">
	<ul>
		<img src="../Icon/logo3.png" class="glogo">
		<li style="float: right; margin-right:50px;"><a href="loginpemilik.php"> Login </a></li>
		<li style="float: right"><a href="Register.php"> Register </a></li>
		<!-- <li><a href="#"> Bantuan </a></li> -->
	</ul>
</nav>

	<div class="badan">
		<form method="post" action="daftar.php">
			<div class="labregis"> Register </div>
					<label><b>Username</b></label>
		   		<input class="loginput" type="text" placeholder="Masukan Username" name="username" required>
					<label><b>Nama Lengkap</b></label>
		   		<input class="loginput" type="text" placeholder="Masukan Username" name="namalengkap" required>
		   		<label><b>Password</b></label>
		     	<input class="loginput " type="password" placeholder="Masukan Password" name="pass1" required>
		   		<label><b>Ulangi Password</b></label>
		     	<input class="loginput " type="password" placeholder="Masukan Ulang Password" name="pass2" required>
	    		<label><b>Email</b></label>
		   		<input class="loginput" type="text" placeholder="Enter Email" name="email" required>
		     	<input class="logbutton" name="register" type="submit" value="Daftar">
		</form>
	</div>
