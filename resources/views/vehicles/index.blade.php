<x-layout page="Aw2web | Veiculos">

  <x-subMenu />
  <script> 
    setTimeout(function () {
      document.getElementById("alert").style.display = "none";
    }, 3000);
    function hide(){
      document.getElementById("alert-success").style.display = "none";
    }
  </script>
  @if (session('alert'))
    <div id="alert" class="alert">
      <div id="alert-success" class="alert-success">
        {{ session('alert') }}
        <a class="close" href="{{route('vehicles')}}">X</a>
      </div>
    </div>        
  @endif

  <table border="0">  
    <thead>     
        <x-tableTitle
        id='ID'
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
              <a title="Editar" href="{{route('vehicle.edit', ['id' => $vehicle->id])}}">
                <img src="/assets/images/icon-edit.png" />
              </a>              
              <a id="alert" onclick="return confirm('Tem certeza que deseja excluir? Este processo é irreversível!')" title="Excluir" href="{{route('vehicle.delete', ['id' => $vehicle->id])}}">
                <img src="/assets/images/icon-delete.png" />
              </a>
            </div>                                    
          </td>
        </tr>       
      @endforeach 
    </tbody>

  </table>
          
</x-layout>