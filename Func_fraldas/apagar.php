<?php
 

#-------------------Conexao-----------------------

try {
   $dsn = 'mysql:host=localhost;dbname=fraldas';
   $usuario = 'root';
   $senha = '';

   $conexao = new PDO($dsn, $usuario , $senha);
}
catch(PDOException $e){

   echo "Banco de Dados Erro: ".$e->getMessage();
} 
catch(Exception $e){
     
   echo " Erro Generico: ".$e->getMessage();
}
#-------------------Apagar-----------------------
echo "estou aqui";

if (isset($_GET['apagar'])){
   $ui = addslashes($_GET['apagar']);
   $aux = $conexao->prepare(" DELETE  FROM protocolo WHERE id = :id");
   $aux->bindValue(":id",$ui);
   $aux-> execute();
  
}
  header("location:../tabela.php");


?>