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

$aux = $conexao->prepare("SELECT * FROM protocolo2");
$aux->execute();
$x=$aux->fetchAll(PDO::FETCH_ASSOC);

?>