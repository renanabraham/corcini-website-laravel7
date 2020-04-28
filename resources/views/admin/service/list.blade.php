<div class="shadow-lg p-3 mb-5 bg-white rounded">
    <div class="row">
        <div class="col">
            <h2><b>2.</b> Gestão dos <b>Serviços</b> do Site</h2>
        </div>
        <div class="col">
            <a class="btn btn-primary float-right" href="/admin/service/create">Adicionar novo serviço ao site</a>
        </div>
    </div>
    <div class="row">
        <div class="col"><p>Aqui você pode fazer a gestão de todos os serviços do site.</p></div>
    </div>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">ID#</th>
            <th scope="col">Serviço</th>
            <th scope="col">Editar</th>
            <th scope="col">Excluir</th>
        </tr>
        </thead>
        <tbody>

        @foreach($servicesAll as $service)
            <tr>
                <th scope="row">{{$service->id}}</th>
                <td>{{$service->title}}</td>
                <td><a href="admin/service/edit/{{$service->id}}">Editar</a></td>
                <td><a class="text-danger" href="admin/service/destroy/{{$service->id}}" onclick="return confirm('Tem certeza?')">Excluir</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>




