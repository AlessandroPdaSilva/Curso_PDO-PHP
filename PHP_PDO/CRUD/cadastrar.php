<?php require_once "includes/header.php"; 
require_once "vendor/autoload.php";

$cliente = new Cliente();// nome,sobrenome,email,idade

?>
<!-- header -->

<body>
    <br>
    <div class="container">

        <h1 style="text-align: center;"> Novo Cliente </h1>
        <br>


        <!-- formulario -->
        <form action="app/model/Cliente.php" method="post">
            


            <!-- nome / sobrenome -->
             
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Nome">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Sobrenome">
                    </div>
                </div>
             

            <br>

            <!-- email / idade -->
             
                <div class="row">
                    <div class="col">
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="col-md-3">
                        <input id="idade" name="idade" placeholder="Ex: 18" class="form-control input-md" required="" type="text">
                    </div>
                </div>
             

            <br>

            
            
            <!-- enviar cadastro-->
            <button type="submit" class="btn btn-success" name="btn-cadastro">Cadastrar</button>
            <!-- voltar para clientes-->
            <a href="index.php" class="btn btn-primary"> Voltar</a>


        </form>

    </div>
</body>



<!-- footer -->
<?php require_once "includes/footer.php"; ?>