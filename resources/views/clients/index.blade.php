<x-layout page="Aw2web | Clientes">
  
    <x-subMenu />

    @if (session('alert'))
    <script> 
      setTimeout(function () {
        document.getElementById("alertClient").style.display = "none";
    }, 3000);
      function hide(){
        document.getElementById("alert-success").style.display = "none";
    }
    </script>
    <div id="alertClient">
      <div id="alert-success" class="alert-success">
        {{ session('alert') }}
      </div>
    </div>        
  @endif

    <table border="0">
      <thead>            
        <x-tableTitle
          id='#'
          name='Nome'
          cpf='Cpf'
          fone='Telefone'
          email='E-mail'
          actions='Ações'
        >
        </x-tableTitle>           
      </thead>

      @if ($search)
        <p>Buscando por: <strong>'{{ $search }}'</strong></p> 
      @endif

      <tbody>      
        @foreach ($clients as $client)            
          <tr class="tr_body">
            <td class="tdLine1">{{$client->id ?? ''}}</td>
            <td class="tdLine2">{{$client->name ?? ''}}</td>
            <td class="tdLine3">{{$client->cpf ?? ''}}</td>
            <td class="tdLine4">{{$client->fone ?? ''}}</td>  
            <td class="tdLine5">{{$client->email ?? ''}}</td>
            <td class="tdLine6">
              <div class="actions">
                <a title="Editar" href="{{route('client.edit', ['id' => $client->id])}}">
                  <img src="/assets/images/icon-edit.png" />
                </a>
                <a onclick="return confirm('Tem certeza que deseja excluir? Este processo é irreversível!')" title="Excluir" href="{{route('client.delete', ['id' => $client->id])}}">
                  <img src="/assets/images/icon-delete.png" />
                </a>
              </div>                                    
            </td>
          </tr>        
        @endforeach          
      </tbody>
      @if(count($clients) == 0 && $search)
        <p>Não foi possível encontrar nenhum cliente {{ $search }}! <a href="/clients">Ver todos os Clientes</a></p> 
      @elseif(count($clients) == 0)
        <p>Não existem Clientes!</p>
      @endif
    </table>
  
</x-layout>