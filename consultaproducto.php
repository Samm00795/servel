<?php
    session_start();
    include ('serv.php');
    if(isset($_SESSION['usuario'])){
    header('Content-Type: text/html; charset=UTF-8');
?>
<html>
	<head>
		<title>BIENVENIDOS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/bootstrap.min.css" />
         <!--iconos -->
         <script src="https://kit.fontawesome.com/4ab0829245.js" crossorigin="anonymous"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
        <div class="container">
           <div class="row">
                <div class="col-md-2">
                    <center>
                        <img src="img/consorcio.png" class="img img-responsive"><br><br>
                        <a href="#" class="btn btn-info btn-block" role="button">Foros</a><br> <br> 
                        <a href="#" class="btn btn-info btn-block" role="button">Personal</a><br><br> 
                        <a href="#" class="btn btn-info btn-block" role="button">Normas técnicas</a><br> <br>
                        <a href="#" class="btn btn-info btn-block" role="button">Boletines</a><br> <br>
                        <a href="#" class="btn btn-info btn-block" role="button">Sistema ISO</a> <br><br>
                        <a href="#" class="btn btn-info btn-block" role="button">Sugerencias</a> <br><br>
                        <a href="logout.php" class="btn btn-danger btn-block" role="button">Cerrar sesión</a> <br>

                    </center>
                      
                </div>
                <div class="col-md-9">
                    <h1>CONSORCIO</h1>
                   <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <a class="navbar-brand" href="#">CONSORCIO</a>
                            </div>
                                <ul class="nav navbar-nav">
                                <li><a href="panel.php">Inicio</a></li>
                                <li><a href="registro.php">Registro</a></li>
                                <li ><a href="lista.php">Lista</a></li>
                                <li class="active"><a href="consulta.php">Consulta</a></li>
                            </ul>
                        </div>
                    </nav>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                           <h2>Datos a consultar</h2>
                            <form action="consultaproducto.php" method="POST">
                                <div class="form-group">
                                    <label>Descripcion del producto: </label>
                                    <input type="text" name="query" class="form-control"/>
                                    <input type="submit" name="buscar" value="Buscar" class="btn btn-primary" style="margin-top:20px"/>
                                </div>                       
                            </form>
                            <?php
                               if (isset($_POST['query'])){ 
                                   include("serv.php"); 
                                   $letras=$_POST['query'];
                                    $results = "SELECT * FROM producto WHERE nom LIKE '%$letras%'";
                                    echo '<table class="table table-condensed">';
                                    echo "<thead>";
                                    echo "<tr>";
                                    echo "<th>Codigo</th>";
                                    echo "<th>Nombre</th>";
                                    echo "<th>Marca</th>";
                                    echo "<th>Precio</th>";
                                    echo "<th>C.Proveedor</th>";
                                    echo "<th>C.Categoria</th>";
                                    echo "<th>Stock</th>";
                                    echo "</tr>";
                                    echo "</thead>";
                                    echo "<tbody>";
                                   foreach($db->query($results) as $fila) {

                                        echo "<tr>";
                                        echo "<td>" .$fila['codpro'] . "</td>";
                                        echo "<td>" .$fila['nom'] . "</td>";
                                        echo "<td>" .$fila['mar'] . "</td>";
                                        echo "<td>" .$fila['pre'] . "</td>";
                                        echo "<td>" .$fila['codprov'] . "</td>";
                                        echo "<td>" .$fila['codcat'] . "</td>";
                                        echo "<td>" .$fila['sto'] . "</td>";
                                        echo "</tr>";
                                    }
                                    $dbh = null;
                                    echo "</tbody>";
                                    echo "</table>";
                               }
                            ?>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div> 
                <div class="col-md-1 text-center">
                <i class="fa-solid fa-user fa-4x fa-flip" style="margin-top:20px; color: #31B0D5;"></i>
                    <header>
                        <h2><small>Bienvenido </small><b><?php echo $_SESSION['usuario']; ?></b></h2>
					</header>                   
                </div>               
            </div>
        </div>				
	</body>
</html>                
<?php
    }
    else{
    echo '<script>window.location="iniciar.php"; </script>';
    }
    $profile=$_SESSION['usuario'];
?>