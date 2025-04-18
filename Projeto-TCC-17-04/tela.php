<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Serviços</title>
    <link rel="stylesheet" href= "style.css">
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



</div>

</div>

 

<style>

body{
            font-family: Arial, Helvetica, sans-serif;
            background:none;
            
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

        

        .flex-container{

            display: flex;
            justify-content: center;
            


        }

        .container mt-5{
            background:none;
        }


        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
        }


        .carrossel {
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            height: 400px;
            display: flex;
            flex-wrap: nowrap;
            justify-content: start;
        }

        .card > .row {
            color: white;
            display: flex;
            flex-wrap: nowrap;
        }

        .card > .row > .icon {
            background: #223;
            color: white;
            border-radius: 50%;
            width: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 15px;
        }

        .card > .row > .description {
            display: flex;
            justify-content: center;
            flex-direction: column;
            overflow: hidden;
            height: 80px;
            width: 520px;
            opacity: 0;
            transform: translateY(30px);
            transition-delay: .3s;
            transition: all .3s ease;
        }

        .description p {
            color: #b0b0ba;
            padding-top: 5px;
        }

        .description h4 {
            text-transform: uppercase;
        }

        input {
            display: none;
        }

        input:checked + label {
            width: 600px;
        }

        input:checked + label .description {
            opacity: 1 !important;
            transform: translateY(0) !important;
        }

        .card[for="c1"] {
            background-image: url('imagens/01.jpeg');
        }
        .card[for="c2"] {
            background-image: url('imagens/02.jpeg');
        }
        .card[for="c3"] {
            background-image: url('imagens/03.jpeg');
        }
        .card[for="c4"] {
            background-image: url('imagens/04.jpeg');

        }

        .container{

        display: flex;
        justify-content: center;

        }

        #nav_logo {
            font-size: 24px;
            color: white;
        }



        /*@media (max-width: 768px) {
            .navigation_header
            .mobile_menu {
                display: none; /* Esconde a navbar em telas menores que 768px 
            }
        } */

        header {
            /*width: 100%;*/
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

        @media screen and (max-width: 1170px) {
            #nav_list,
            .btn-default {
                display: none;
            } 

            #mobile_btn {
                display: block;
                border: none;
                background-color: transparent;
                font-size: 1.5rem;
                cursor: pointer;
            }

            #mobile_menu.active {
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            #mobile_nav_list {
                display: flex;
                flex-direction: column;
                gap: 12px;
                margin: 12px 0px;
            }

            #mobile_nav_list .nav-item {
                list-style: none;
                text-align: center;
            } 
        }


            .container {
            display: none;
            justify-content: center;
            gap: 20px;
            margin-top: 100px;
            
            }
            
            
            .card {
            background: linear-gradient(to bottom, #f44336, #ff9800);
            padding: 20px;
            border-radius: 10px;
            height: 330px;
            width: 200px;
            text-align: center;
            margin-top: 100px;
            
            }
            .itens {
            display: none;
            margin-top: 10px;
            text-align: left;
            }
            button {
            background: white;
            color: #f44336;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            }
  </style>
</head>
<body>
 
<div class="container">
  <div class="card">
    <button onclick="toggleItens('profissionais')">PROFISSIONAIS</button>
    <div id="profissionais" class="itens">
    <br><br>
    
      
      <button onclick="window.location.href='card.php'">Shows e DJ</button>
      <button onclick="window.location.href='card.php'">Garçom</button>
      <button onclick="window.location.href='card.php'">Segurança</button>
      <button onclick="window.location.href='card.php'">Limpeza</button>
      <button onclick="window.location.href='card.php'">Animador de festa</button>

     
    </div> 
  </div>

 
  <div class="card">
    <button onclick="toggleItens('parceiros')">PARCEIROS</button>
    <div id="parceiros" class="itens">
    <br><br>
    <button onclick="window.location.href='card.php'">Salgados</button><br>
    <button onclick="window.location.href='card.php'">Bebidas</button>
    <button onclick="window.location.href='card.php'">Confeitarias</button>
    <button onclick="window.location.href='card.php'">Bomboniere</button>
      
  
    </div>
  </div>
 
  <div class="card">
    <button onclick="toggleItens('locacao')">LOCAÇÃO</button>
    <div id="locacao" class="itens">
    <br><br>
    
    <p><button onclick="window.location.href='card.php'">Brinquedos</button></p>
    <p><button onclick="window.location.href='card.php'">Decoração</button></p>
    <p><button onclick="window.location.href='card.php'">Eletronicos</button></p>
    <p><button onclick="window.location.href='card.php'">Mesas e cadeiras</button></p>
    <p><button onclick="window.location.href='card.php'">Utensilios</button></p>
    

    </div>
  </div>
</div>
 
<script>
  function toggleItens(id) { /* Ele faz aparecer os serviços*/
    const el = document.getElementById(id);
el.style.display = el.style.display === 'block' ? 'none' : 'block';
  }
</script>
 
</body>
</html>
    <footer>          	
        <br><br>
        <br><br>
        <br><br>
        <br><br>
        <br><br>
        <br><br>
        <br><br>
        
        <div class="footerBottom">
            <p>Tel (11) 7070-7070</p>
            <p>e-mail: flashparty@gmail.com <span class="designer">Flash Party</span></p>
        </div>
    </footer>
    <style>
       
   
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f8f8f8;
}

.footerBottom {
    background-color: orange;
    padding: 10px;
    text-align: center;
    cursor:pointer;
}

.footerBottom p {
    color: wheat;
}
   
    

 
header {
    background: linear-gradient(to right, rgb(255,0,0), rgb(255,165,0));
    display: flex;
    align-items: center;
    justify-content: space-evenly;
    padding: 0 10px;
    padding: 10px 20px;
    border-bottom: 2px solid #ddd;
    font-weight: bold;


    
    width: 100%;
    height: 100%;
}
 
.logo {
    width: 60px;
    height: auto;
    display: flex;

    
}
 
nav a {
    
    text-decoration: none;
    color: white;
    margin: 0 10px;
    font-weight: center;
    
    
}
 
.container {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin: 50px auto;
    max-width: 900px;
}
 