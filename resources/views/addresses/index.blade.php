<x-layout page="Aw2web | Endereços">

    <x-subMenu />
    
    <table border="0">
      <thead>     
          <x-tableTitle
          id='ID'
          client='Cliente'
          street='Rua'
          number='Nº'
          cep='Cep'
          district='Bairro'
          city='Cidade'
          state='UF'
          actions='Ações'
        >
        </x-tableTitle>    
      </thead>
  
      <tbody>      
        @foreach ($addresses as $address)     
          <tr class="tr_body">
            <td class="tdLine1a">{{$address->id ?? ''}}</td>
            <td class="tdLine2a">{{$address->client_id ?? ''}}</td>
            <td class="tdLine3a">{{$address->street ?? ''}}</td>
            <td class="tdLine4a">{{$address->number ?? ''}}</td>
            <td class="tdLine5a">{{$address->cep ?? ''}}</td>  
            <td class="tdLine6a">{{$address->district ?? ''}}</td>
            <td class="tdLine7a">{{$address->city ?? ''}}</td>
            <td class="tdLine8a">{{$address->state ?? ''}}</td>
            <td class="tdLine9a">
              <div class="actions">
                <a title="Editar" href="{{route('address.edit', ['id' => $address->id])}}">
                  <img src="/assets/images/icon-edit.png" />
                </a>
                <a id="sweetalert2" title="Excluir" href="{{route('address.delete', ['id' => $address->id])}}">
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