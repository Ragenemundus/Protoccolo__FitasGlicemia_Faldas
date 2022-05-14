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
<br>
        <div class="row">
            <div class="col-sm-3">
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
            <div class="col-sm-6">


                <div class="container-fluid">
                    <h1 class="display-5" style="text-align: center">Formulário de Fitas de Glicemia </h1>

                    <form class="row g-3" name="form1" id="form1" method="post"
                        action="Func_glicemia/controlador_de_tarefas.php">

                        <div class="col-md-12">

                            <div class="input-group">
                                <span class="input-group-text" id="inputGroupPrepend2">Motorista</span>
                                <input type="text" class="form-control" id="validationDefaultUsername"
                                    aria-describedby="inputGroupPrepend2" name="motorista" required>
                            </div>

                        </div>
                        <div class="col-md-12">
                            <div class="input-group">
                                <span class="input-group-text" id="inputGroupPrepend2">Mês Referente</span>
                                <select class="form-select" id="validationDefault04" name="codigo" required>
                                    <option selected disabled value="">...</option>
                                    <option value="1">Janeiro</option>
                                    <option value="2">Fevereiro</option>
                                    <option value="3">Março</option>
                                    <option value="4">Abril</option>
                                    <option value="5">Maio</option>
                                    <option value="6">Junho</option>
                                    <option value="7">Julho</option>
                                    <option value="8">Agosto</option>
                                    <option value="9">Setembro</option>
                                    <option value="10">Outubro</option>
                                    <option value="11">Novembro</option>
                                    <option value="12">Dezembro</option>

                                </select>
                            </div>

                        </div>


                        <div class="col-md-12">

                            <div class="input-group ">


                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text">Data</span>
                                    <input type="number" aria-label="First name" class="form-control" placeholder="Dia"
                                        name="dia" required>


                                    <select class="form-select" id="validationDefault04" name="mes" required>
                                        <option selected disabled value="">Mês</option>

                                        <option value="Janeiro">Janeiro</option>
                                        <option value="Fevereiro">Fevereiro</option>
                                        <option value="Março">Março</option>
                                        <option value="Abril">Abril</option>
                                        <option value="Maio">Maio</option>
                                        <option value="Junho">Junho</option>
                                        <option value="Julho">Julho</option>
                                        <option value="Agosto">Agosto</option>
                                        <option value="Setembro">Setembro</option>
                                        <option value="Outubro">Outubro</option>
                                        <option value="Novembro">Novembro</option>
                                        <option value="Dezembro">Dezembro</option>
                                    </select>
                                    <input type="number" aria-label="Last name" class="form-control" placeholder="Ano"
                                        name="ano" required>

                                </div>

                            </div>
                            <div class="col-md-12">

                                <div class="input-group">
                                    <span class="input-group-text" id="inputGroupPrepend2">Unidades </span>
                                    <select class="form-select" id="validationDefault04" name="unidade" required>
                                        <option selected disabled value="">Posto de Saúde</option>
                                        <option value="Alípio">Alípio</option>
                                        <option value="Wanderley">Wanderley</option>
                                        <option value="Waldomiro">Waldomiro</option>
                                        <option value="Epifânio">Epifânio</option>
                                        <option value="Elvidio">Elvidio</option>
                                        <option value="Nestor">Nestor</option>
                                        <option value="Noé">Noé</option>
                                        <option value="D.Ana">D.Ana</option>
                                        <option value="D.Gina">D.Gina</option>
                                        <option value="Luis">Luis</option>
                                        <option value="João Alves">João Alves</option>
                                        <option value="Pedro Costa">Pedro Costa</option>
                                        <option value="Manoel Cipriano">Manoel Cipriano</option>

                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="col-12">
                                <button class="btn btn-outline-dark" type="submit">Enviar</button>
                            </div>
                    </form>


                </div>
            </div>

        </div>
    </div>


    <!-- -->


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