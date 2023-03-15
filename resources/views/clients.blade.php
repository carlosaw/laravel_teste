<x-layout page="Aw2web | Clientes">

  <x-subMenu />

  <table border="0">
    <thead>           
      <x-tableTitle
        id='ID'
        name='Nome'
        address='ID End.'
        cpf='Cpf'
        fone='Telefone'
        email='E-mail'
        actions='Ações'
      >
      </x-tableTitle>     
    </thead>

    <tbody>      
      @foreach ($clients as $client)            
        <tr class="tr_body">
          <td class="tdLine1">{{$client->id ?? ''}}</td>
          <td class="tdLine2">{{$client->name ?? ''}}</td>
          <td class="tdLine3">{{$client->address_id ?? ''}}</td>
          <td class="tdLine4">{{$client->cpf ?? ''}}</td>
          <td class="tdLine5">{{$client->fone ?? ''}}</td>  
          <td class="tdLine6">{{$client->email ?? ''}}</td>
          <td class="tdLine7">
            <div class="actions">
              <a title="Editar" href="http://meusite.com/clients/edit/{{$client['id']}}">
                <img src="/assets/images/icon-edit.png" />
              </a>
              <a title="Excluir" href="http://meusite.com/clients/delete/{{$client['id'] ?? ''}}">
                <img src="/assets/images/icon-delete.png" />
              </a>
            </div>                                    
          </td>
        </tr>        
      @endforeach          
    </tbody>
    
  </table>
        
  {{-- <div class="table">
    <table class="table-striped">
      <x-tableTitle
        id='ID'
        name='Nome'
        address='ID End.'
        cpf='Cpf'
        fone='Telefone'
        email='E-mail'
        actions='Ações'
      >
      </x-tableTitle>
     
      <tbody>    
        @foreach ($clients as $client)            
          <tr>
            <td class="tdLine">{{$client->id ?? ''}}</td>
            <td class="tdLine">{{$client->name ?? ''}}</td>
            <td class="tdLine">{{$client->address_id ?? ''}}</td>
            <td class="tdLine">{{$client->cpf ?? ''}}</td>
            <td class="tdLine">{{$client->fone ?? ''}}</td>  
            <td class="tdLine">{{$client->email ?? ''}}</td>
            <td class="tdLine">
              <div class="actions">
                <a title="Editar" href="http://meusite.com/clients/edit/{{$client['id']}}">
                  <img src="/assets/images/icon-edit.png" />
                </a>
                <a title="Excluir" href="http://meusite.com/clients/delete/{{$client['id'] ?? ''}}">
                  <img src="/assets/images/icon-delete.png" />
                </a>
              </div>                                    
            </td>
          </tr>        
        @endforeach 
      </tbody>   
    </table>

  </div> --}}
  
</x-layout>
