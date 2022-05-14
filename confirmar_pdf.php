<?php
  require 'Func_fraldas/buscador_seletivo.php';
 
 
?>

<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>Protocolo Fraudas & Glicemia </title>
    <script>
    function pdf() {
       var data  = new Date();
       dia = data.getDate();
       mes = data.getMonth();
       ano =  data.getFullYear();
      
       dados = document.getElementById('table1').innerHTML;
       janela = window.open('','','width=800,heigth=600');
       janela.document.write('<html><head>');
       janela.document.write('<link href= "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"        integrity= "sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin= "anonymous">')
       janela.document.write('<title>Pdf</title></head>');
       janela.document.write('<body>'); 
       janela.document.write('<h1>Almoxarifado Municipal da Saúde</h1>');
       janela.document.write('<h2>Protocolo de Envio de Fraldas</h2>');
       janela.document.write('Ipiaú-Ba ',dia,'/',mes,'/',ano);
       
       janela.document.write(dados);

       janela.document.write('</body></html>');
       janela.document.close();
       janela.print();
       


    }
    
    </script>
</head>

<body>

    <div class="container">

        <div class="row">
            <div class="col-sm-3"><br>
            <nav class=" flex-column">
                <a class="nav-link  btn btn-outline-secondary" href="index.php"
                        style="color:black">Formulario Fraldas</a><br>
                    <a class="nav-link btn btn-outline-secondary" href="tabela.php" style="color:black">Visualisar Fraldas</a><br>
                    <a class="nav-link btn btn-outline-secondary" href="formulario_glicemia.php" style="color:black">Formulario Glicemia</a><br>
                    <a class="nav-link  btn btn-outline-secondary"  href="tabela_glicemia.php" style="color:black">Visualisar Glicemia</a><br>
                </nav>
            </div>
            <div class="col-sm-9" >
               




                <h1 class="display-4" style="text-align: center">Painel</h1>
               <div id="table1">
               <table class="table" >
                    <thead>
                        <tr>
                            
                            <th scope="col">Mês Referente</th>
                            <th scope="col">Dia</th>
                            <th scope="col">Mes</th>
                            <th scope="col">Ano</th>
                            <th scope="col">Motorista </th>
                            <th scope="col">Unidade </th>
                            
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                       
                        if (isset($_GET['z'])){
                            $ui = addslashes($_GET['y']);
                            $aux = $conexao->prepare("SELECT * FROM protocolo  WHERE cod = :y");
                            $aux->bindValue(":y",$ui);
                            $aux->execute();
                            $y=$aux->fetchAll(PDO::FETCH_ASSOC);
                           
                         }
                                 if (count($y)>0) {
                                     for ($i=0;$i<count($y);$i++){
                                         echo "<tr>";
                                         foreach ($y[$i] as $k =>$v ){
                                            
                                            if ($k != 'id'){
                                                echo "<td>".$v."</td>";
                                            }
                                                
                                                 
                                             
                                         }
                                         ?>
                        <td>
                           



                        </td>

                        <?php 
                                          echo "</tr>";
                                     }
                                         
                                 }

                            ?>


                    </tbody>
                    
                </table>
               </div>
                
               <input type="button" class="btn btn-dark" onclick="pdf()" value="Confirmar ">

            </div>




        </div>
    </div>




    <!-- Optional JavaScript; choose one of the two! -->


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>