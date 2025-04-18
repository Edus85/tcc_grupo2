<?php

class Usuario{
    private $email;
    private $senha;
    private $pdo;

    public function __construct(){
        $dns = "mysql:dbname=contato; host=localhost";
        $user = "root";
        $pass = "";

        try {
            $this->pdo = new PDO($dns, $user, $pass);
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }


    //o metodo get retorna o valor de uma propriedade
    public function getEmail()
    {
        return $this->email;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function getId()
    {
        return $this->id;
    }
    // o metodo set permite alterar o valor de uma propriedade
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

   

    public function cadastrar($email, $senha){
        //primeiro passo: criar a consulta sql
        $sql = "INSERT INTO usuarios SET  email = :e, senha = :s";
        
        //segundo passo: passar a consulta para o metdo prepare do PDO
        $stmt = $this->pdo->prepare($sql);

        //terceiro passo: para cada apelido, passar o valor correspondente
      
        $stmt->bindValue(":e", $email);
        $stmt->bindValue(":s", $senha);

        //quarto passo: executar o comando
        return $stmt->execute();
    }

    public function chkUser($email, $tipo){
        //passo 1: criar a consulta sql
        echo $email;
        if ($tipo = '1') {
         $sql = "SELECT * FROM usuarios WHERE email = :e";
         echo "procura em usuarios";
         exit;
        }else{
            $sql = "SELECT * FROM prestadores WHERE email = :e";
            echo "procura em prestadores";
         exit;
        } 

        //passo 2: passar a consulta para o método prepare do PDO
        $stmt = $this->pdo->prepare($sql);

        //passo 3: para cada apelido, passar o valor correspondente
        $stmt->bindValue(":e", $email);
        
        //passo 4: executar o comando
        $stmt->execute();

        if( $stmt->rowCount() > 0 ){
            return true;
        }else{
            return false;
        }    
    }

    public function chkPass($email, $senha, $tipo){
        //passo 1: criar a consulta sql
        $sql = "SELECT * FROM usuarios WHERE email = :e AND senha = :s";

        //passo 2: passar a consulta para o método prepare do PDO
        $stmt = $this->pdo->prepare($sql);

        //passo 3: para cada apelido, passar o valor correspondente
        $stmt->bindValue(":e", $email);
        $stmt->bindValue(":s", $senha);
        
        //passo 4: executar o comando
        $stmt->execute();

        if ($stmt->rowCount() > 0){
            return $stmt->fetch();
        }else{
            return false;
        }     

    }
}
