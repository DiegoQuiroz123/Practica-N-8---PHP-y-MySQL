<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <style>
        table, h2 {
            background-color:purple;
            font: 10px;
            color:black
        }
        table, td {
            border: 2px solid black;
            background-color:purple;
            font: 10px;
            color:white;
        }
    </style>
    <title></title>
</head>
<body >
    <style>
        .estilotitulo{
            font-size:40px;
            color:black;
        }
    </style>
    <label class="estilotitulo">DATOS DE LA COMPRA</label>
    <form>
        <table>
            <?php
            $nombre = $_POST['nombre'];
            $direccion = $_POST['direccion'];
            $correo = $_POST['correo'];
            $contra = $_POST['contra'];
            $fecha = $_POST['fecha'];
            $genero = test_input($_POST["sexo"]);
            $aficiones = $_POST['aficiones'];
            echo "<tr>";
            echo "<td>"."<h2> "."Nombre completo:"."</h2>"."</td>";
            echo "<td>".$nombre."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>"."<h2> "."Direccion:"."</h2>"."</td>";
            echo "<td>".$direccion."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>"."<h2> "."Correo electronico:"."</h2>"."</td>";
            echo "<td>".$correo."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>"."<h2> "."Contraseña:"."</h2>";
            echo "<td>".$contra."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>"."<h2> "."Fecha de nacimiento:"."</h2>"."</td>";
            echo "<td>".$fecha."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>"."<h2> "."Sexo"."</h2>";
            echo "<td>".$genero."</td>";
            echo "<tr>";
            echo "<td>"."<h2> Los temas de interes:"."</h2>"."</td>";
            if(isset($_POST['ficcion'])){
                if($_POST==true){
                    $temas.="Ficcion"."<br>";
                }
            }
            if(isset($_POST['terror'])){
                if($_POST==true){
                    $temas.="Terror"."<br>";
                }
            }
            if(isset($_POST['accion'])){
                if($_POST==true){
                    $temas.="Accion"."<br>";
                }
            }
            if(isset($_POST['comedia'])){
                if($_POST==true){
                    $temas.="Comedia"."<br>";
                }
            }
            if(isset($_POST['suspenso'])){
                if($_POST==true){
                    $temas.="Suspenso"."<br>";
                }
            }
            echo "<td>".$temas."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>"."<h2> "."Aficiones<br> seleccionadas:"."</h2>"."</td>";
            echo "<td>".$aficiones."</td>";
            function test_input($data) {
              $data = trim($data);
              $data = stripslashes($data);
              $data = htmlspecialchars($data);
              return $data;
            }
            ?>
        </table>
            <input type="submit" name="button1"
              value="Confirmar Datos" />
    </form>
</body>
</html>