<x-layout page="Aw2web | Mecânicos">
  
  <x-subMenu />
  
  @if (session('alert'))
    <script> 
      setTimeout(function () {
        document.getElementById("alertMechanic").style.display = "none";
    }, 3000);
      function hide(){
        document.getElementById("alert-success").style.display = "none";
    }
    </script>
    <div id="alertMechanic">
      <div id="alert-success" class="alert-success">
        {{ session('alert') }} ✔
      </div>
    </div>        
  @endif
  
  <table border="0">
    <thead>            
      <x-tableTitle
        id='#'
        name='Nome'
        phone='Telefone.'
        percentage='Porcentagem'
        actions='Ações'
      >
      </x-tableTitle>           
    </thead>

    <tbody>      
      @foreach ($mechanics as $mechanic)            
        <tr class="tr_body">
          <td class="tdLine1m">{{$mechanic->id ?? ''}}</td>
          <td class="tdLine2m">{{$mechanic->name ?? ''}}</td>
          <td class="tdLine3m">{{$mechanic->phone ?? ''}}</td>
          <td class="tdLine4m">{{$mechanic->percentage ?? ''}}</td>
          <td class="tdLine7m">
            <div class="actions">
              <a title="Editar" href="{{route('mechanic.edit', ['id' => $mechanic->id])}}">
                <img src="/assets/images/icon-edit.png" />
              </a>
              <a onclick="return confirm('Tem certeza que deseja excluir? Este processo é irreversível!')" title="Excluir" href="{{route('mechanic.delete', ['id' => $mechanic->id])}}">
                <img src="/assets/images/icon-delete.png" />
              </a>
            </div>                                    
          </td>
        </tr>        
      @endforeach          
    </tbody>
  
  </table>
</x-layout>