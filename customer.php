<!DOCTYPE html>
<html>
    <head>
        <title>Inicio</title>
        <link rel="stylesheet" href="css.css">
        <?php 
			if(isset($_POST["email"]) && isset($_POST["pass"])){ //LOGIN
				echo '<script language="javascript">alert("Login correct");</script>';
			}
			if (isset($_POST["logout"])){ //LOGOUT
				session_unset();
				header("Location: ./index.php");
			}
		?>
    </head>
    <body>
		<nav>
			<div id="mainmenu">
				<ul>
					<li><a href="customer.php">Home</a></li>
					<li><a href="customer.php">Register</a></li>
                    <div><form method='POST'>
        				<input type='submit' name='logout' value='Logout'/>
					</form></div>
				</ul>
			</div>
		</nav
		<section>
			<img src="aplets/home.jpg" width="100%">
			<p>
				CUSTOMER
			</p>
		</section>
		<footer>
			<p>
				Contacto
			</p>
		</footer>
    </body>
</html>