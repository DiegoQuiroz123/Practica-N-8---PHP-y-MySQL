<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Boletos</title>
    
</head>
<body>
    <style>
        .estilo{
            font-size:50px;
                    background-color:blanchedalmond;
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
            echo "Nombre: ".$nombre;
            echo "<br>";
            echo "Destino: ".$destino;
            echo "<br>";
            echo "Fecha de Nacimiento: ".$fechadenacimiento;
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
                echo "Edad: ".$diff->format('%y');
                echo "<br>";
                echo "Precio: $".$precio*0;
                echo "<br>";
            }
            if ($diff->format('%y')>2 && $diff->format('%y')<17 ){
                echo "Edad: ".$diff->format('%y');
                echo "<br>";
                echo "Precio: $".$precio*75/100;
                echo "<br>";
            }
            if ($diff->format('%y')>17 ){
                echo "Edad: ".$diff->format('%y');
                echo "<br>";
                echo "Precio : $".$precio;
                echo "<br>";
            }
            ?>
        </table>
    </form>
    
</body>
</html>



