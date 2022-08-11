<?php
if(!empty($_POST['Usuario']) && !empty($_POST['Contraseña'])){
$Usuario = $_POST['Usuario'];
$Contraseña = $_POST['Contraseña'];
if($Usuario == "admin" && $Contraseña == "root"){
    header("Location: /HACK4TID501/table.php");
}else{
    echo "la contraseña o usuario que ingresaste no fue correcta";
}
}else{
    echo "no has escrito ningun usuario y contraseña";
}
?>