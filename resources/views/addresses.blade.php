<x-layout page="Aw2web | Endereços">

  <x-subMenu />
    
  <table border="1">
    <thead>     
      <x-tableTitle
        id=ID
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
          <td class="tdLine2a">{{$address->street ?? ''}}</td>
          <td class="tdLine3a">{{$address->number ?? ''}}</td>
          <td class="tdLine4a">{{$address->cep ?? ''}}</td>
          <td class="tdLine5a">{{$address->district ?? ''}}</td>
          <td class="tdLine6a">{{$address->city ?? ''}}</td>  
          <td class="tdLine7a">{{$address->state ?? ''}}</td>
          <td class="tdLine8a">
            <div class="actions">
              <a title="Editar" href="http://meusite.com/addresss/edit/{{$address['id']}}">
                <img src="/assets/images/icon-edit.png" />
              </a>
              <a title="Excluir" href="http://meusite.com/addresss/delete/{{$address['id'] ?? ''}}">
                <img src="/assets/images/icon-delete.png" />
              </a>
            </div>                                    
          </td>
        </tr>       
      @endforeach 
    </tbody>

  </table> 
      
</x-layout>
