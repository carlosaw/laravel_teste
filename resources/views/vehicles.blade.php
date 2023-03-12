<x-layout page="Aw2web | Veiculos">

  <x-subMenu />
  <div class="table">
    <table class="table-striped">
      <x-tableTitle
        plate='Placa'
        brand='Marca'
        model='Modelo'
        color='Cor'
        year='Ano'
        km='Km'
        actions='Ações'
      >
      </x-tableTitle>
     
      @foreach ($vehicles as $vehicle)
      <tbody>
        <tr>
          <td>{{$vehicle->plate ?? ''}}</td>
          <td>{{$vehicle->brand ?? ''}}</td>
          <td>{{$vehicle->model ?? ''}}</td>
          <td>{{$vehicle->color ?? ''}}</td>  
          <td>{{$vehicle->year ?? ''}}</td>
          <td>{{$vehicle->km ?? ''}}</td>
          <td>
            <div class="actions">
              <a>
                <img src="/assets/images/icon-edit.png" />
              </a>
              <a>
                <img src="/assets/images/icon-delete.png" />
              </a>
            </div>                                    
          </td>
        </tr>
      </tbody>
        
      @endforeach    
    </table>
  </div>        
          
</x-layout>