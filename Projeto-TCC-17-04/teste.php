<?php
require"usuario.class.php";

$con=$usuario = new Usuario();

if($con){
    echo"Conectaqdo com o banco";
}else{
    echo"erro ao conectar";
}


