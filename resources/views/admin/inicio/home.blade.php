<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discografia</title>
    <!--links -->
    
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>
    <!--=================cabeçalho=============================-->
    <div class="container my-5">
        <p></p>
    </div>
    <div class="container p-5 border">
        <div class="row">
            <div class="col-md-6">
                <img src="public\imagem\logo.png" alt="logo">
            </div>
            <div class="col-md-6 text-end">
                <h1> Discografia</h1>
            </div>
        </div>

    </div>
    <!--=================corpo da pagina=============================-->

    <div class="container border">
        <!--pesquisa por faixa-->
        <div class="input-group p-5 mb-3 center">
            <input type="text" class="form-control" placeholder="Digite uma palavra chave" aria-label="Recipient's username" aria-describedby="button-addon2">
            <button type="button" class="btn btn-primary" style="width: 90px">Pesquisar </button>
            <button type="button" class="btn btn-primary" style="width: 90px;">Criar </button>
            <button type="button" class="btn btn-primary" style="width: 90px;">Excluir</button>
        </div>
        <!--faixa e albuns-->

        <div class="row p-4 m-3 center">
            <div class="col-7 bg-warning">nome</div>

        </div>
        <div class="row p-4 m-3 center">
            <div class="col-1 bg-success">N</div>
            <div class="col-7 bg-warning">nome</div>
            <div class="col-2 bg-success">duração</div>
            <div class="col-2 bg-warning">obções </div>
        </div>

    </div>


</body>
</html>