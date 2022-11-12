

    @foreach ($album as $album)
        <div class="p-5 mb-3 center">
            <h5>album</h5>
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
                    <th class="row"> 1</th>
                    <td>{{$album->nome}}</td>
                    <td>Otto</td>
                    <td><button type="button" class="btn btn-primary">Primary</button></td>
                </tr>
                <tr>
                    <th class="row"> 2</th>
                    <td >Jacob</td>
                    <td>Thornton</td>
                    <td><button type="button" class="btn btn-primary">Primary</button></td>
                </tr>
                <tr>
                    <th class="row"> 3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td><button type="button" class="btn btn-primary">Primary</button></td>
                </tr>
                </tbody>
            </table>
        </div>     
    @endforeach