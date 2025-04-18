<?php
session_start();

if(isset($_SESSION['nome'])){
    echo "Ola ". $_SESSION['nome'];
}else{
    echo "Você não esta logado";
}
echo "<br><a href='pagina1.php'> Voltar para pagina anterior </a>";

echo "<br><a href='sair.php'> Sair </a>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Principal</title>
</head>
<body>
    
</body>
</html>