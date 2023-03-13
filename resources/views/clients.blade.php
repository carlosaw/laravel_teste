<x-layout page="Aw2web | Clientes">

  <x-subMenu />
        
  <div class="table">
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
            <td>{{$client->id ?? ''}}</td>
            <td>{{$client->name ?? ''}}</td>
            <td>{{$client->address_id ?? ''}}</td>
            <td>{{$client->cpf ?? ''}}</td>
            <td>{{$client->fone ?? ''}}</td>  
            <td>{{$client->email ?? ''}}</td>
            <td>
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

  </div>
   
    
    
</x-layout>
