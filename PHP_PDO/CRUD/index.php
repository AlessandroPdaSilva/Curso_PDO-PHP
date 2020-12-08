<?php require_once "includes/header.php"; 
require_once "vendor/autoload.php";

$crud = new ClienteCRUD();
$crud-> read($connect);


?>
<!-- header -->


<br><!-- titulo -->
<h1 class="mx-auto" style="width: 200px;"> Clientes </h1>
<br>


<div class="container">

    <!-- tabela -->
    <table class="table table-striped table-dark">
        <thead>
            <tr class="bg-success">
                <th scope="col">nome</th>
                <th scope="col">sobrenome</th>
                <th scope="col">idade</th>
                <th scope="col">email</th>
            </tr>
        </thead>


        <tbody>
            <tr>
                <td>Mark</td>
                <td>Otto</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
     
        </tbody>
    </table>

    <!-- cadastrar -->
    <a href="cadastrar.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true"> Cadastrar</a>
</div>






<!-- footer -->
<?php require_once "includes/footer.php"; ?>