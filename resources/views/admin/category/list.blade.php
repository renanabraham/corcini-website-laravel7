<div class="shadow-lg p-3 bg-light mb-5 rounded">
    <div class="row">
        <div class="col">
            <h2><b>1.</b> Gestão das <b>Categorias</b> do Site</h2>
        </div>
        <div class="col">
            <a class="btn btn-primary float-right" href="/admin/category/create"
               onclick="return confirm('TOME CUIDADO: Se você adicionar uma nova categoria PRINCIPAL o sistema entra em colapso. Você tem essa autônomia, mas lembre-se que o sistema não suporta adicionar nova imagem de fundo nem ordem correta. Adicione somente novas sub categorias relacionadas as três principais já colocadas. ')">Adicionar
                nova categoria</a>
        </div>
    </div>
    <div class="row">
        <div class="col"><p>Aqui você pode fazer a gestão de todas as categorias do site.</p></div>
    </div>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">ID#</th>
            <th scope="col">Título da categoria</th>
            <th scope="col">Descrição</th>
            <th scope="col">Editar</th>
            <th scope="col">Excluir</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            @if($category->parent == null)
                <tr>
                    <th scope="row">{{$category->id}}</th>
                    <td><b>{{$category->title}}</b></td>
                    <td>{{$category->subtitle}}</td>
                    <td><a href="/admin/category/edit/{{$category->id}}">Editar</a></td>
                    <td><a class="text-danger" href="/admin/category/delete/{{$category->id}}"
                           onclick="return confirm('Tem certeza?')">Excluir</a>
                    </td>
                </tr>
                @foreach($subCategories as $sub)
                    @if($sub->parent == $category->id)
                        <tr>
                            <th scope="row">{{$sub->id}}</th>
                            <td>- {{$sub->title}}</td>
                            <td>- {{$sub->subtitle}}</td>
                            <td><a href="/admin/category/edit/{{$sub->id}}">Editar</a></td>
                            <td><a class="text-danger" href="/admin/category/delete/{{$sub->id}}"
                                   onclick="return confirm('Tem certeza?')">Excluir</a>
                            </td>
                        </tr>
                    @endif
                @endforeach
            @endif
        @endforeach
        </tbody>
    </table>
</div>
