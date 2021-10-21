<?PHP
function recogeDato($campo){
    return isset($_REQUEST[$campo])?$_REQUEST[$campo]:'';
}
if(!empty($_FILES['uploaded_file']))
{
    $radio = recogeDato('radio1');
    $radio2 = recogeDato('radio2');
    $radio3 = recogeDato('radio3');
    if ($radio!=" "  ){
        $path = "Desarrollo de Software/";
    }elseif ($radio2!=" "){
        $path ="Estadistica/";
    }elseif ($radio3!=" "){
        $path = "Infraestructura de Tecnologia de la Información/";
    }else{
        $path = "uploads/";
    }
    echo $radio;
    echo $radio2;
    echo $radio3;

    $path = $path.basename( $_FILES['uploaded_file']['name']);
    $tipoarchivo= strtolower(pathinfo($path, PATHINFO_EXTENSION));
    if($tipoarchivo=='pdf'){
        if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
            echo "El archivo se subio correctamente";

        } else{
            echo "No se subio Correctamente el archivo, Intenta de nuevo";
        }
    }
    else{
        echo "El documento no es pdf";
    }

}
echo $radio;
echo $radio2;
echo $radio3;
?>