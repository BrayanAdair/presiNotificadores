<?php
include("../conect.php");

$Licencia=$_POST["Licencia"];
$ReSello=$_POST["ReSello"];
$RFC=$_POST["RFC"];
$Ap_paterno=$_POST["Ap_paterno"];
$Ap_materno=$_POST["Ap_materno"];
$nombre=$_POST["nombre"];
$Razon_social=$_POST["Razon_social"];
$Domicilio_negocio=$_POST["Domicilio_negocio"];
$estado_permiso=$_POST["estado_permiso"];
$fecha_emision=$_POST["fecha_emision"];
$fecha_expiracion=$_POST["fecha_expiracion"];


$query = "INSERT INTO [dbo].[negocio] ([rfc], [ap_paterno], [ap_materno], [razon_social], [domicilio_negocio], [nombre], [num_licencia], [re_sello], [estado_permiso], [fecha_emision], [fecha_expiracion] ) VALUES('$RFC','$Ap_paterno','$Ap_materno','$Razon_social','$Domicilio_negocio', '$nombre', '$Licencia', '$ReSello','$estado_permiso','$fecha_emision', '$fecha_expiracion')";
// $query = "INSERT INTO [dbo].[negocio] ([rfc], [ap_paterno], [ap_materno], [razon_social] ) VALUES('$RFC', '$Ap_paterno', '$Ap_materno', '$Razon_social')";
$res = sqlsrv_prepare($conn,$query);

if(sqlsrv_execute($res)){
echo "se insertaron los datos se feliz";
}else{
echo "no se inserto nada resuelvelo flojo";
}
?>


<!-- SET IDENTITY_INSERT [dbo].[infodatausers] ON
GO
INSERT INTO [dbo].[infodatausers] ( [id_usuarios], [usuario], [estatus] )
VALUES ( 01, 'brayan', 1)
GO
SET IDENTITY_INSERT [dbo].[infodatausers] OFF
GO -->

<!-- names
 Licencia
 ReSello
 RFC -->
