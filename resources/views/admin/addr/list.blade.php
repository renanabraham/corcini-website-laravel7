<div class="shadow-lg p-3 bg-light mb-5 rounded">
    <div class="row">
        <div class="col">
            <h2><b>3.</b> Gestão de <b>Endereços</b> do Site</h2>
        </div>
        <div class="col">
            <a class="btn btn-primary float-right" href="/admin/addr/create">Adicionar novo endereço</a>
        </div>
    </div>
    <div class="row">
        <div class="col"><p>Aqui você pode fazer a gestão de todos os endereços do site.</p></div>
    </div>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">FOTO</th>
            <th scope="col">Cidade</th>
            <th scope="col">Editar</th>
            <th scope="col">Excluir</th>
        </tr>
        </thead>
        <tbody>
        @foreach($addrs as $addr)
            <tr>
                <th scope="row"><img src="{{asset('storage/'.$addr->photo)}}" alt="" width="60" height="60"></th>
                <td>Clínica Corcini em <b>{{$addr->city}}</b></td>
                <td><a href="/admin/addr/edit/{{$addr->id}}">Editar</a></td>
                <td><a class="text-danger" href="/admin/addr/delete/{{$addr->id}}" onclick="return confirm('Tem certeza?')">Excluir</a>
                </td>
            </tr>

        @endforeach
        </tbody>
    </table>
</div>
