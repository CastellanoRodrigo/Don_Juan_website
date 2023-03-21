<?php 
include('./template/Cabecera.php');
include "modelo/conexion.php";

/* conexion con la bd
$host = "localhost:3307";
//$host = "localhost";
$usuario = "root";
$clave = "";
$base = "sistema_dj";
$cn = new mysqli($host, $usuario, $clave, $base);
*/

#sube el archivo 
    //print_r($_FILES); // se usa primero para saber la ruta con el nombre de donde se va a guardar - desp lo saque del codigo
    //trae el nombre del archivo ---> se pone el nombre del control y el name
    $nombre=$_FILES['archivo']['name'];
    // y esto que trae en la siguiente variable se pone la ruta de guardado
    $guardado=$_FILES['archivo']['tmp_name'];

    //se verifica que exista la carpeta donde se va a guardar el archivo
    // si no echiste la carpeta la tiene que crear
    if(!file_exists('archivos')){
        mkdir('archivos',0777,true);
        //aca si no existia ya la crea entonces pregunta de nuevo
        if(file_exists('archivos')){
            //ASIGNA DONDE ESTA GUARDADO Y EL DESTINO QUE ES UNA CADENA carpetaArchivos+nombre
            if(move_uploaded_file($guardado, 'archivos/' .$nombre)){
                echo "Archivo gurdado con exito";
            }else{
                echo "El archivo NO SE PUDO GUARDAR";
            }
        }
    }else{
        //si la carpeta archivos ya existe directamente sube el archivo ahi adentro
        //ASIGNA DONDE ESTA GUARDADO Y EL DESTINO QUE ES UNA CADENA carpetaArchivos+nombre
            if(move_uploaded_file($guardado, 'archivos/' .$nombre)){
                echo "Archivo gurdado con exito";
            }else{
                echo "El archivo NO SE PUDO GUARDAR";
            }
    }
?>

<?php #Llammo a pie 
include('./template/pie.php');
?>