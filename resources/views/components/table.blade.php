<table border="1" class="table table-hover">
    <tr>
        <th>{{$item1 ?? ''}}</th>
        <th>{{$item2 ?? ''}}</th>
        <th>{{$item3 ?? ''}}</th>
        <th>{{$item4 ?? ''}}</th>
        <th>{{$item5 ?? ''}}</th>
        <th>{{$item6 ?? ''}}</th>
        <th>{{$item7 ?? ''}}</th>
    </tr>
    <tr>
        <td>{{$data['plate'] ?? ''}}</td>
        <td>{{$data['brand'] ?? ''}}</td>
        <td>{{$data['model'] ?? ''}}</td>
        <td>{{$data['color'] ?? ''}}</td>
        <td>{{$data['year'] ?? ''}}</td>
        <td>{{$data['km'] ?? ''}}</td>
        <td>
            <a href="/vehicles/edit/{{$data['id'] ?? ''}}">Editar</a>
            <a href="/vehicles/delete/{{$data['id'] ?? ''}}">Excluir</a>
        </td>
    </tr>
    
</table>