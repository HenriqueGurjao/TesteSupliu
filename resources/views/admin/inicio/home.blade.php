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

    <div class="container border bg-light" id="Container">
        <div id="infor">
            <!--pesquisa por faixa-->
            <div class="input-group p-5 mb-3 center">
                <input type="text" name="filtra" class="form-control rounded-pill" placeholder="Digite uma palavra chave" aria-label="Recipient's username" aria-describedby="button-addon2">
                <button type="button" class="btn btn-primary rounded-pill" style="width: 110px">Pesquisar </button>
                <button class="btn btn-primary rounded-pill dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width: 110px;">opcionais</button>
                    <ul class="dropdown-menu">
                        <li><a class="btn btn-primary rounded-pill dropdown-item" href="{{route('criar.album')}}">album</a></li>
                        <li><a class="btn btn-primary rounded-pill dropdown-item" href="{{route('criar.faixa')}}">Faixa</a></li>
                        <li><a class="btn btn-primary rounded-pill dropdown-item" href="#">Excluir</a></li>
                    </ul>
            </div>
            <!--faixa e albuns-->
            <div class="center p-5 mb-3 ">


            @foreach ($albums as $album)
                <h4>album: {{$album->nome}} {{$album->ano}}</h4>
                @foreach ($faixas as $faixa)
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th class="col">Num</th>
                                <th class="col-8">nome </th>
                                <th class="col-2">Duração</th>
                                <th class="col-2"></th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr class="">
                            <th class="row"> {{$faixa->id}}</th>
                            <td>{{$faixa->nome}}</td>
                            <td>{{$faixa->duracao}}</td>
                            <td><button type="button" class="btn btn-primary">Primary</button></td>
                        </tr>
                        
                        </tbody>
                    </table>
                @endforeach
            @endforeach

            
                    
            </div>
            
            
        
    
        </div>
    </div>


</body>
</html>