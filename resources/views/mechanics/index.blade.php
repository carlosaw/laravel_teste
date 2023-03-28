<x-layout page="Aw2web | Mecânicos">
  
  <x-subMenu />
  
  <table border="1">
    <thead>            
      <x-tableTitle
        id='ID'
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
              <a id="sweetalert2" title="Excluir" href="{{route('mechanic.delete', ['id' => $mechanic->id])}}">
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