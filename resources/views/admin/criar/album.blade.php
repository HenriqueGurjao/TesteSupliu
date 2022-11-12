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
    <!--link do css-->
    <link rel="stylesheet" href="/css/home.css">
</head>
<body>
    <!--=================cabeçalho=============================-->
    <div class="container my-5">
        <p></p>
    </div>
    <div class="container p-5 border bg-light">
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('imagem/logo.png')}}" alt="logo">
            </div>
            <div class="col-md-6 text-end">
                <h1> Discografia</h1>
            </div>
        </div>

    </div>
    <!--=================corpo da pagina=============================-->

    <div class="container border p-5  bg-light" id="Container">
        <div class="row justify-content-center">
            <div class="col-4">
                <h1>Criar Album</h1>
            </div>
            
        </div>
        <div class='row'>   
        <div class="col-3"></div>     
        <!--pesquisa por faixa-->
        <div class="col-6 mb-3  " id="infor">
            <form class='center ' action="{{route('album.store')}}" method="POST">
                @csrf
                <div class="mb-3 mt-3">
                    <label for="text" class="form-label">Nome:</label>
                    <input type="text" class="form-control" name="nome" placeholder="Nome do album" style="width: 500px;">
                </div>
                <div class="mb-3">
                    <label for="pwd" class="form-label">Ano:</label>
                    <input type="text" class="form-control" name="ano" placeholder="ano de criação" name="pswd" style="width: 500px;">
                </div>
                
                <br>

                <div class="row ">
                    
                        <div class="col-md-2  ">
                            <button type="submit" class="btn btn-primary" style="width: 100px;">Submit</button>
                        </div>
                    
                        <div class="col-1 ">
                            <a href="{{route('index')}}" type="submit" class="btn btn-primary " style="width: 100px;">voltar</a>
                        </div>
                    
                </div>
            </form>    
        </div>
        </div>
    

    </div>


</body>
</html>