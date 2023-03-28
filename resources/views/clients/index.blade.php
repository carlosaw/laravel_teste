<x-layout page="Aw2web | Clientes">
  
    <x-subMenu />

    <table border="0">
      <thead>            
        <x-tableTitle
          id='ID'
          name='Nome'
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
            <td class="tdLine3">{{$client->cpf ?? ''}}</td>
            <td class="tdLine4">{{$client->fone ?? ''}}</td>  
            <td class="tdLine5">{{$client->email ?? ''}}</td>
            <td class="tdLine6">
              <div class="actions">
                <a title="Editar" href="{{route('client.edit', ['id' => $client->id])}}">
                  <img src="/assets/images/icon-edit.png" />
                </a>
                <a id="sweetalert2" title="Excluir" href="{{route('client.delete', ['id' => $client->id])}}">
                  <img src="/assets/images/icon-delete.png" />
                </a>
              </div>                                    
            </td>
          </tr>        
        @endforeach          
      </tbody>
    
    </table>
  
</x-layout>

  <script>
    document.getElementById('sweetalert2').addEventListener('click', function(){
      Swal.fire({
      title: 'Tem certeza?',
      text: "Você não será capaz de reverter isso!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Sim, apague-o!'
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire(
          'Deletado!',
          'Seu arquivo foi excluído.',
          'success'
        )
      }
    })
    });
  </script>