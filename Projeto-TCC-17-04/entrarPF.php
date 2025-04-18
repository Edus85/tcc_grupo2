<?php
session_start();
require "Usuario.class.php";

$con = $usuario = new Usuario();
if(!$con){
    echo "Erro ao conectar com o banco. Tente mais tarde!";
}else{
    if( isset($_POST['email']) ){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = $usuario->chkUser($email,2);
        
        if( $user ){
            $pass = $usuario->chkPass($email, $password,2);
                if( !empty( $pass) ){
                    $_SESSION['nome']  = $pass['nome'];
                  
                    // $_SESSION['email'] = $pass['email'];
                    // $_SESSION['senha'] = $pass['senha'];

                    header("location:pagina2.php");

                }

            }
        }else{
            echo "<script>
                    confirm('Usuario nao cadastrado!')
                </script>";
            //header("location:cadastro.php");
        }

    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flash Party</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="stylesheet" href="src/javascript/script.js">
    <script src="src/javascript/script.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/scrollreveal"></script>

</head>

<body>
    <div class="header" id="header">                                        
            <div class="logo_header">
                <img src="imagens/logosemf.png" class="img_logo_header" alt="Logo Flash Party">
            </div>  

            <nav id="navbar">
                <i class="fa-solid" id="nav_logo"> Flash Party</i>
                <div class="navigation_header">
                    <a href="home.php">Home</a>
                    <a href="tela.php">Menu</a>
                    <a href="sobre.php">Sobre</a>
                    <a href="entrar.php">Entrar</a>
                    <a href="cadastro.php">Cadastro</a>                               
                </div>
            </nav>
        </div>

<style>

    .logo{
        width: 70px;
        position:center;

    }

        .img_logo_header{
            width: 70px;
            position:left;   
        }

        
        .header,
        .navigation_header{
            
            display: flex;
            flex-direction: row;
            align-items: center;
            
        }

        .header{
            background: linear-gradient(to right, rgb(255,0,0), rgb(255,165,0));
            box-shadow: 1px 1px 4px;
            height: 6em;
            justify-content: space-evenly;
            padding: 0 10%;
        }

        .navigation_header{
            
            gap: 2em;
            z-index: 1;
        }

        .navigation_header a{ /*  COR DA LETRA DOS BOTOES */
             
            text-decoration: none;
            color:#fff;
            font-weight: bold;

        }

       
        .btn_icon_header{
            background-color: transparent;
            border: none;
            color: black;
            cursor: pointer;
            display: none;

        }    

        .box{
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 10px;
        }

        a{
            
            border: 3px solid white;
            border-radius: 5px;
            padding: 10px;
        }
        
        
        a:hover{
            background-color: yellow;
        }

        

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
        }


        .container{

        display: flex;
        justify-content: center;

        }

        #nav_logo {
            font-size: 24px;
            color: white;
        }



        @media (max-width: 768px) {
            .navigation_header{
            /*.mobile_menu*/ 
                display: none; /* Esconde a navbar em telas menores que 768px */
            }
        }

        header {
            width: 100%;
            padding: 28px 8%;
            position: sticky;
            top: 0;
            background-color: var(--color-primary-1);
            z-index: 3;
        }

        #navbar {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        #nav_logo {
            font-size: 24px;
            color: none;
        }

        #nav_list {
            display: flex;
            list-style: none;
            gap: 48px;
        }

        .nav-item a {
            text-decoration: none;
            color: #1d1d1dad;
            font-weight: 600;
        }

        .nav-item.active a {
            color: var(--color-neutral-1);
            border-bottom: 3px solid var(--color-primary-4);
        }

        #mobile_btn {
            display: none;
        }

        #mobile_menu {
            display: none;
            left: 85%
        }



        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');



        .body_box {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: white;
            
        }

        .btn-default {
            background-color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            border: none;
            padding: 8px 12px;
            border-radius: 8px;
            font-size: 15px;
            font-weight: 500;
            color: orange;
            cursor: pointer;
            gap: 8px;
            height: fit-content;
            box-shadow: 0px 10px 15px -3px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease;
        }

        .btn-default:hover {
            background-color: red;
        }


        #form_box {
            padding: 80px;
            border-radius: 8px;
            display: flex;
            justify-content: center;
            align-items: center;    
        }

        #form_header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        #form_title {
            font-weight: 500;
            color: #272727;
            position: relative;
        }

        #form_title::after {
            content: '';
            position: absolute;
            width: 100px;
            height: 3px;
            border-radius: 30px;
            background-color: red;
            left: 0;
            bottom: 0;
        }

        #form {
            display: flex;
            justify-content: space-between;
            flex-direction: column;
            gap: 50px;
            height: 100%;
        }

        #input_container {
            display: grid;
            gap: 24px;
        }

        .form-label {
            font-size: 12px;
            color: #404044;
            font-weight: 500;
        }

        .input-field {
            display: flex;
            align-items: center;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0px 10px 15px -3px rgba(0, 0, 0, 0.1);
        }

        .input-field i {
            display: flex;
            align-items: center;
            width: 30px;
            height: 20px;
            color: #404044;
        }

        .form-control {
            padding: 10px;
            width: 100%;
            border: none;
            border-radius: 8px;
        }

        .input-field .password-icon:hover {
            cursor: pointer;
            color: #676770;
        }

        .form-control:focus {
            outline: none;
        }

        .input-box .input-field:focus-within {
            outline: 2px solid orange;
        }

        input:-webkit-autofill {
            -webkit-box-shadow: 0 0 0 1000px red inset !important;
            color: #000;
        }

        .radio-container {
            grid-column: span 2;
        }

        #gender_inputs {
            display: flex;
            gap: 20px;
        }

        .radio-box {
            display: flex;
            gap: 4px;
            align-items: center;
        }

        .form-control[type="radio"] {
            accent-color: red;
        }

        .login-box {
            background-color: #f8890b;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
            border-radius: 10px;
            
        }

        .btn {
            width: 100%;
            padding: 10px;
            background-color: #fd0000;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
        }

        .btn:hover {
            background-color: #2980b9;
        }

        .forgot-password {
            display: block;
            margin-top: 10px;
            font-size: 12px;
            color: #070707;
            text-decoration: none;
        }

        .forgot-password:hover {
            text-decoration: underline;
        }

</style>

    <main id="body_box">
        <div id="form_box"> 
            <div class="login-box">
                
                    <img src="imagens/logosite.png" class="img_logo_header" alt="Logo"> 

                <h2>Bem Vindo</h2>
                <form action="" method = "post">
                    <div class="input-group">
                        <label for="username">email</label>
                        <input type="text" id="username" name="email" placeholder = "Entre com o seu email" required>
                    </div>
                    <div class="input-group">
                        <label for="password">Senha</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <!--<button class="btn">Entrar</button> -->
                    <button  type="submit" name = "btnEntrar"      class="btn">     Entrar      </button>
                    
                    <a href="#" class="forgot-password">Esqueci a senha</a>
                </form>

    </main>

</body>

<script>

const passwordIcons = document.querySelectorAll('.password-icon');

passwordIcons.forEach(icon => {
    icon.addEventListener('click', function () {
        const input = this.parentElement.querySelector('.form-control');
        input.type = input.type === 'password' ? 'text' : 'password';
        this.classList.toggle('fa-eye');
    })
})

</script>
</html>