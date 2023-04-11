<x-layout page="Aw2web | Endereços">

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

      @if ($search)
        <p>Buscando por: <strong>'{{ $search }}'</strong></p> 
      @endif

      <tbody>      
        @foreach ($addresses as $address)     
          <tr class="tr_body">
            <td class="tdLine1a">{{$address->id ?? ''}}</td>            
            <td class="tdLine2a">{{$address->client['name'] ?? ''}}</td>            
            <td class="tdLine3a">{{$address->street ?? ''}}</td>
            <td class="tdLine4a">{{$address->number ?? ''}}</td>
            <td class="tdLine5a">{{$address->cep ?? ''}}</td>  
            <td class="tdLine6a">{{$address->district ?? ''}}</td>
            <td class="tdLine7a">{{$address->city ?? ''}}</td>
            <td class="tdLine8a">{{$address->state ?? ''}}</td>
            <td class="tdLine9a">
              <div class="actions">
                <a title="Editar" href="{{route('address.edit', ['id' => $address->id])}}">
                  <img src="/assets/images/icon-edit.png" title="Editar"/>
                </a>
                <a  onclick="return confirm('Tem certeza que deseja excluir? Este processo é irreversível!')" title="Excluir" href="{{route('address.delete', ['id' => $address->id])}}">
                  <img src="/assets/images/icon-delete.png" title="Deletar"/>
                </a>
                
              </div>                                    
            </td>
          </tr>       
        @endforeach
         
      </tbody>
      @if(count($addresses) == 0 && $search)
        <p>Não foi possível encontrar nenhum endereço {{ $search }}! <a href="/addresses"> Ver todos os Endereços</a></p> 
      @elseif(count($addresses) == 0)
        <p>Não existem Endereços!</p>
      @endif
    </table>
    
  </x-layout>