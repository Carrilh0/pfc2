<link rel="stylesheet" href="css/app.css">

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID File</th>
                <th scope="col">Documentos</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($arq as $a)
                <tr>                     
                    <th scope="row">{{ $a->id}}</th>

                    <td>
                        <a href="{{ url('storage/documento/'. $a->nome)}}" height="250" width="400">{{ $a->nome }}</a>
                    </td>     
                </tr>
            @endforeach
        </tbody>
    </table>
</div>