<!DOCTYPE html>
<html>
    <head>
    	<!-- EN EL HEADER SE ENCUENTRA LO NECESARIO, CSS, JQUERY, LA CONEXIÓN A LA BASE DE DATOS -->
        <title>Inicio</title>
        <link rel="stylesheet" href="css.css">
        <?php 
        	//require 'conexion.php';
        	
			//if(isset($_POST["email"]) && isset($_POST["pass"])){ //LOGIN
				/*
				if($row = mysqli_fetch_assoc(mysqli_query($link, "SELECT `user`, `type` FROM `users` WHERE user='{$_POST['user']}' AND pass='{$_POST['pass']}'"))){
					$_SESSION["user"] = $row["user"];
					header("Location: ./{$row['type']}.php");}
				elseif ($_POST["user"] != "" && $_POST["pass"] == "") {
					echo '<script language="javascript">alert("Login incorrect");</script>';}
				*/
			//}
			if (isset($_GET["logout"])){ //LOGOUT
				session_unset();
				echo '<script language="javascript">alert("Hola");</script>';
				header("Location: ./index.php");
			}
			//$ROW LA OCUPO PARA FINES PRACTICOS
			//$row = mysqli_fetch_assoc(mysqli_query($link, "SELECT * FROM `users` WHERE user='{$_SESSION['user']}'"));
		?>
    </head>
    <body>
		<header>
				<ul>
					<li><a href="#mainmenu">Home</a></li>
<?php if(!isset($_POST["email"]) && !isset($_POST["pass"]) || $_POST["email"] == "" || $_POST["pass"] == "") { ?>
					<li><a href="#signIn">Signin</a></li>
					<li id="Login">
						<form method="POST">
							<input class="textField" type="text" name="email" placeholder="email"/>
							<input class="textField" type="password" name="pass" placeholder="password">
							<input class="textField" type="submit" value="Login" style=" button:hover { background: #6fb337; }">
						</form>
					</li>
<?php } else if ($_POST["email"]=="admin" && $_POST["pass"]=="123") {?>
					<li><a href="#expositors">Expositors</a></li>
					<li><a href="#employees">Employees</a></li>
					<li><a href="#courses">Courses</a></li>
					<li><a href="#workshops">Workshops</a></li>
					<li><a href="#payments">Payments</a></li>
					<li><a href=".">Logout</a></li>
<?php } else if ($_POST["email"]=="quesomora@gmail.com" && $_POST["pass"]=="123" /*|| $_REQUEST["email"]!=""*/) {?>
					<li><a href="#registerCom">Register company</a></li>
					<li><a href="#workshopSus">Workshop subscriptions</a></li>
					<li><a href=".">Logout</a></li>
					<li id="Login"><?php echo "Bienvenido " . $_POST["email"]?></li>
<?php } ?>
				</ul>
		</header>
		<div id="section">
<?php if(!isset($_POST["email"]) && !isset($_POST["pass"])) { ?>

            <div id="mainmenu"><h2>Index pag inicio</h2><hr>
            </div>

		    <div id="signIn"><h2>Sign in</h2><hr>
                <form method="post">
                    Nombre(s): <input type="text" name="name" value=""><br>
                    Apellido(s): <input type="text" name="last" value=""><br>
                    Fecha de nacimiento: <input type="date" name="birth" min="1940-01-01" max="2002-12-31"><br>
                    Contraseña: <input type="password" name="pass"><br>
                    Confirmar contraseña: <input type="password" name="pass2"><br>
                    <p style="color:red"></p>
                    <input type="submit" name="cancel" value="Cancelar" onclick="location.href='.'">
                    <input type="submit" name="update" value="Aceptar" id="ingresar" class="default"> <!--REGISTER-->
                </form>
		    </div>

<?php } else if ($_POST["email"]=="quesomora@gmail.com" && $_POST["pass"]=="123") {?>

            <div id="mainmenu"><h2>Index customer</h2><hr>
            </div>

		    <div id="registerCom"><h2>Cambiar información personal</h2><hr>
                <form method="post">
                    Nombre(s): <input type="text" name="name" value=""><br>
                    Apellido(s): <input type="text" name="last" value=""><br>
                    Fecha de nacimiento: <input type="date" name="birth" min="1940-01-01" max="2002-12-31"><br>
                    Contraseña: <input type="password" name="pass"><br>
                    Confirmar contraseña: <input type="password" name="pass2"><br>
                    <p style="color:red"></p>
                    <input type="submit" name="cancel" value="Cancelar" onclick="location.href='.'">
                    <input type="submit" name="update" value="Aceptar" id="ingresar" class="default"> <!--REGISTER-->
                </form>
		    </div>

            <div id="workshopSus"><h2>Workshop Suscription</h2><hr>
				<table id="table">
					<thead height="50%">
						<caption>Marketing</caption>
						<tr>
							<th>Hour</th>
							<th>Workshop</th>
							<th>Expositor</th>
						</tr></thead>
					<tbody>
						<?php 
							/*
							$query=mysqli_query($link, "SELECT `date`, `description`, `amount` FROM `{$user['account']}`");
							while($row = mysqli_fetch_assoc($query)) {
								echo "<tr href='?date=" . $row['date'] . "#visualizar'>
									<td>{$row['date']}</td>
									<td>{$row['description']}</td>
									<td>{$row['amount']}</td>
								</tr>";
							}*/
						?>
					</tbody>
				</table>
            </div>
<?php } else if ($_POST["email"]=="admin" && $_POST["pass"]=="123") {?>
            <div id="mainmenu"><h2>Index admin</h2><hr>
            </div>
            <div id="expositors"><h2>Expositors</h2><hr>
            </div>
            <div id="employees"><h2>Employees</h2><hr>
            </div>
            <div id="courses"><h2>Courses</h2><hr>
            </div>
            <div id="workshops"><h2>Workshops</h2><hr>
            </div>
            <div id="payments"><h2>Payments</h2><hr>
            </div>
<?php } ?>
		</div>
		<div id="footer">
			<p>
				Contacto
			</p>
		</div>
    </body>
</html>