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
#-------------------Inserção-----------------------
$c=$_POST['codigo'] ;
$d=$_POST['dia'] ;
$m=$_POST['mes'] ;
$a=$_POST['ano'] ;
$mot=$_POST['motorista'];
$uni=$_POST['unidade'];
print($d);
$aux = $conexao->prepare('insert into protocolo(cod, 
dia, mes, ano, motorista, unidade) values ( :c, :d, :m, :a, :mot, :uni)');
$aux->bindValue(":c",$c);
$aux->bindValue(":d",$d);
$aux->bindValue(":m",$m);
$aux->bindValue(":a",$a);
$aux->bindValue(":mot",$mot);
$aux->bindValue(":uni",$uni);
$aux-> execute();
header("location: ../tabela.php");

?>