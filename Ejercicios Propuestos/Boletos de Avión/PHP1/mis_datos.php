<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Boletos</title>
    <style>
        h3{
            font-size:20px;
            color:white;
        }
    </style>
</head>
<body class="fondo">
    <style>
        .estilo {
            font-size: 50px;
        }
        .fondo{
            color:white;
            background-image:url(fondito.png);
        }

    </style>
    <label class="estilo">BOLETA</label>
    <form>
        <table>
            <?php
            $nombre = $_POST['nombre'];
            $destino = $_POST['destino'];
            $fechadenacimiento = $_POST['fechanacimento'];
            $today = date("Y-m-d");
            $diff = date_diff(date_create($_REQUEST['fechanacimento']), date_create($today));
            echo "<h3>"."Nombre: "."</h3>";
            echo $nombre;
            echo "<br>";
            echo "<h3>"."Destino: "."</h3>";
            echo $destino;
            echo "<h3>"."Fecha de Nacimiento: "."</h3>";
            echo $fechadenacimiento;
            echo "<br>";
            if($destino=="Estados Unidos"){
                $precio=200;
            }
            if($destino=="Brasil"){
                $precio=180;
            }
            if($destino=="Colombia"){
                $precio=120;
            }
            if($destino=="Argentina"){
                $precio=150;
            }
            if ($diff->format('%y')<3 ){
                echo "<h3>"."Edad: "."</h3>";
                echo $diff->format('%y');
                echo "<h3>"."Precio: "."</h3>";
                echo $precio*0;
                echo "<br>";
            }
            if ($diff->format('%y')>2 && $diff->format('%y')<17 ){
                echo "<h3>"."Edad: "."</h3>";
                echo $diff->format('%y');
                echo "<h3>"."Precio: "."</h3>";
                echo $precio*75/100;
                echo "<br>";
            }
            if ($diff->format('%y')>17 ){
                echo "<h3>"."Edad: "."</h3>";
                echo $diff->format('%y');
                echo "<h3>"."Precio: "."</h3>";
                echo $precio;
                echo "<br>";
            }
            ?>
        </table>
    </form>
    
</body>
</html>



