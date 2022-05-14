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
#-------------------Busca-----------------------

if (isset($_GET['y'])){
   $ui = addslashes($_GET['y']);
   $aux = $conexao->prepare("SELECT * FROM protocolo  WHERE cod = :y");
   $aux->bindValue(":y",$ui);
   $aux->execute();
   $y=$aux->fetchAll(PDO::FETCH_ASSOC);
  
}


 
?>