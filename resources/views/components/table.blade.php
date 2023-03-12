<table border="1" class="table table-hover">
    @if(request()->is('vehicles'))
        <tr>
            <x-tableTitle      
                item1='Placa'
                item2='Marca'
                item3='Modelo'
                item4='Cor'
                item5='Ano'
                item6='Km'
                item7='Ações'            
                ></x-tableTitle>
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
        
    @endif
    
    
    
</table>