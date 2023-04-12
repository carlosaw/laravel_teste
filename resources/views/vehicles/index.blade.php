<x-layout page="Aw2web | Veiculos">

  <x-subMenu />
  
  @if (session('alert'))
    <div id="alert">
      <div id="alert-success" class="alert-success">
        {{ session('alert') }}
      </div>
    </div>        
  @endif

  <table border="0">  
    <thead>     
        <x-tableTitle
        id='#'
        plate='PLACA'
        brand='Marca'
        model='Modelo'
        color='Cor'
        year='Ano'
        km='Km'
        actions='Ações'
      >
      </x-tableTitle>    
    </thead>

    @if ($search)
      <p class="p_search">Buscando por: <strong>'{{ $search }}'</strong></p> 
    @endif

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
              <a title="Editar" href="{{route('vehicle.edit', ['id' => $vehicle->id])}}">
                <img src="/assets/images/icon-edit.png" title="Editar"/>
              </a>              
              <a onclick="return confirm('Tem certeza que deseja excluir? Este processo é irreversível!')" title="Excluir" href="{{route('vehicle.delete', ['id' => $vehicle->id])}}">
                <img src="/assets/images/icon-delete.png" title="Excluir"/>
              </a>
            </div>                                    
          </td>
        </tr>       
      @endforeach
      @if(count($vehicles) == 0 && $search)
        <p>Não foi possível encontrar nenhum veículo com placa {{ $search }}! <a href="/vehicles">Ver todos os Veículos</a></p> 
      @elseif(count($vehicles) == 0)
      <p>Este existem Veículos!</p>
      @endif
    </tbody>

  </table>
     
</x-layout>