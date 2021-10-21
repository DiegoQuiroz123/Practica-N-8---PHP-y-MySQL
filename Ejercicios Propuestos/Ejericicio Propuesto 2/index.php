<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Boletos</title>

</head>
<body class="estilo1">
    <style>
        .estilo{
            font-size:50px;
            background-color:black;
            color:white;
        }
        .estilo1{
            background-color:blanchedalmond;
        }
    </style>
    <label class="estilo">¿La matriz es perfecta?</label>
    <form>
        <table>
            <?php

            $min = 0;
            $max = 1;
            $x = rand(2,10);
            $d = 1;
            $m = 0;
            $mat = [];

            for ( $i = 0; $i < $x; $i++) {
                $j = $i;
                $k = 0;
                for ( $j = $i; $j >= 0; $j--) {
                    $mat[$k][$j] = rand($min, $max);
                    $k++;
                }
            }
            for ( $k = 1; $k < $x; $k++) {
                $i = $m = $k;
                for ( $j = $x-1; $j >= $m; $j--) {
                    $mat[$i][$j] = rand($min, $max);
                    $i++;
                }
            }
            echo "<table border='4' cellspacing='0'>";
            for($i=0;$i<$x;$i++){
                echo "<tr>";
                for($j=0;$j<$x;$j++){
                    echo "<td width='30' align='center'>".$mat[$i][$j]."</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
            echo "La Matriz no es perfecta"
            ?>
        </table>
    </form>

</body>
</html>
