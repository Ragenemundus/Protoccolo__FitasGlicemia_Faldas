<?php
  require_once 'Func_glicemia/buscador.php';
 
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
</head>

<body>

    <div class="container">

        <div class="row">
            <div class="col-sm-3"><br>
                <nav class=" flex-column">
                    <a class="nav-link  btn btn-outline-secondary" href="index.php" style="color:black">Formulario
                        Fraldas</a><br>
                    <a class="nav-link btn btn-outline-secondary" href="tabela.php" style="color:black">Visualisar
                        Fraldas</a><br>
                    <a class="nav-link btn btn-outline-secondary" href="formulario_glicemia.php"
                        style="color:black">Formulario Glicemia</a><br>
                    <a class="nav-link  btn btn-outline-secondary" href="tabela_glicemia.php"
                        style="color:black">Visualisar Glicemia</a><br>
                </nav>
            </div>
            <div class="col-sm-9">
                <h1 class="display-4" style="text-align: center">Mes Referente ao Envio </h1>

                <table class="table table-hover table-bordered border-dark">

                    <tbody>
                        <tr>

                            <td>
                                <a class="btn btn-outline-dark" href="painel_mes_glicemia.php? y= 1" role="button">
                                    Janeiro</a>
                            </td>
                            <td>
                                <a class="btn btn-outline-dark" href="painel_mes_glicemia.php? y= 2"
                                    role="button">Fevereiro</a>
                            </td>
                            <td>
                                <a class="btn btn-outline-dark" href="painel_mes_glicemia.php? y= 3"
                                    role="button">Março</a>
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <a class="btn btn-outline-dark" href="painel_mes_glicemia.php? y=4"
                                    role="button">Abril</a>
                            </td>
                            <td>
                                <a class="btn btn-outline-dark" href="painel_mes_glicemia.php? y=5"
                                    role="button">Maio</a>
                            </td>
                            <td>
                                <a class="btn btn-outline-dark" href="painel_mes_glicemia.php? y=6"
                                    role="button">Junho</a>
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <a class="btn btn-outline-dark" href="painel_mes_glicemia.php? y=7"
                                    role="button">Julho</a>
                            </td>
                            <td>
                                <a class="btn btn-outline-dark" href="painel_mes_glicemia.php? y= 8"
                                    role="button">Agosto</a>
                            </td>
                            <td>
                                <a class="btn btn-outline-dark" href="painel_mes_glicemia.php? y= 9"
                                    role="button">Setembro</a>
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <a class="btn btn-outline-dark" href="painel_mes_glicemia.php? y= 10"
                                    role="button">Outubro</a>
                            </td>
                            <td>
                                <a class="btn btn-outline-dark" href="painel_mes_glicemia.php? y= 11"
                                    role="button">Novembro</a>
                            </td>
                            <td>
                                <a class="btn btn-outline-dark" href="painel_mes_glicemia.php? y= 12"
                                    role="button">Dezembro</a>
                            </td>

                        </tr>

                    </tbody>
                </table>


                <h1 class="display-4" style="text-align: center">Envio de Fitas de Glicemia </h1>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Mês Referente</th>
                            <th scope="col">Dia</th>
                            <th scope="col">Mes</th>
                            <th scope="col">Ano</th>
                            <th scope="col">Motorista </th>
                            <th scope="col">Unidade </th>
                            <th scope="col">Botões </th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                                 if (count($x)>0) {
                                     for ($i=0;$i<count($x);$i++){
                                         echo "<tr>";
                                         foreach ($x[$i] as $k =>$v ){
                                            
                                                 echo "<td>".$v."</td>";
                                                 
                                             
                                         }
                                         ?>
                        <td>
                            <a href="Func_fraldas\apagar.php?apagar=<?php echo $x[$i]['id'];?>"
                                class='btn btn-outline-dark' type='submit' value='Deletar'> Deletar</a>



                        </td>

                        <?php 
                                          echo "</tr>";
                                     }
                                         
                                 }

                            ?>


                    </tbody>
                </table>


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