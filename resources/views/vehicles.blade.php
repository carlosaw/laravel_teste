<x-layout page="Aw2web | Veiculos">

  <x-subMenu />
  <table border="0">
    <thead>     
        <x-tableTitle
        id=ID
        plate='Placa'
        brand='Marca'
        model='Modelo'
        color='Cor'
        year='Ano'
        km='Km'
        actions='Ações'
      >
      </x-tableTitle>    
    </thead>

    <tbody>      
      @foreach ($vehicles as $vehicle)     
        <tr class="tr_body">
          <td class="tdLine1v">{{$vehicle->id ?? ''}}</td>
          <td class="tdLine2v">{{$vehicle->plate ?? ''}}</td>
          <td class="tdLine3v">{{$vehicle->brand ?? ''}}</td>
          <td class="tdLine4v">{{$vehicle->model ?? ''}}</td>
          <td class="tdLine5v">{{$vehicle->color ?? ''}}</td>  
          <td class="tdLine6v">{{$vehicle->year ?? ''}}</td>
          <td class="tdLine7v">{{$vehicle->km ?? ''}}</td>
          <td class="tdLine8v">
            <div class="actions">
              <a title="Editar" href="http://meusite.com/vehicles/edit/{{$vehicle['id']}}">
                <img src="/assets/images/icon-edit.png" />
              </a>
              <a title="Excluir" href="http://meusite.com/vehicles/delete/{{$vehicle['id'] ?? ''}}">
                <img src="/assets/images/icon-delete.png" />
              </a>
            </div>                                    
          </td>
        </tr>       
      @endforeach 
    </tbody>

  </table>
          
</x-layout>