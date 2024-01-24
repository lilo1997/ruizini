<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>RUIZINI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Open Sans';
    }
    body{
        /* background-image: url(img/fondo.jpg); */
        background-size: cover;
    }
    nav{
        max-width: 900px;
        margin: auto;
        background-color: #333;
        font-size: 30px;
        margin-top: 50px;
        border-radius: 15px;
    }
    .menu-horizontal{
        list-style: none;
        display: flex;
        justify-content: space-around;
    }
    .menu-horizontal > li > a{
        display: block;
        padding: 15px 20px;
        color: white;
        text-decoration: none;
    }
    .menu-horizontal > li:hover{
        background-color: red;
    }
    .menu-vertical{
        position: absolute;
        display: none;
        list-style: none;
        width: 200px;
        background-color: rgba(0, 0, 0, .5);
    }
    .menu-horizontal li:hover .menu-vertical{
        display: block;
    }
    .menu-vertical li:hover{
        background-color: black;
    }

    .menu-vertical li a{
        display: block;
        color: white;
        text-decoration: none;
        padding: 15px 15px 15px 20px;
    }

    #html{
        margin: auto;
        padding: 20px;
        max-width: 900px;
        background: white;

    }
    
</style>
</head>
<body>

<nav>
		<ul class="menu-horizontal">
			<li><a href="index.php">Inicio</a></li>
			<li>
				<a href="#">Somos</a>
				<ul class="menu-vertical">
					<li><a href="mision.php">Misión</a></li>
					<li><a href="vision.php">Visión</a></li>
				</ul>

			</li>
			<!-- <li>
				<a href="#">Inscripción</a>
				<ul class="menu-vertical">
					<li><a href="#">Anual</a></li>
					<li><a href="#">Mensual</a></li>
				</ul>
			</li> -->
			<li><a href="contacto.php">Contacto</a></li>
					<li><a href="compone.php">Colaboradores</a></li>

		</ul>
	</nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="js/bootstrap.js"></script>  
</body>
</html>