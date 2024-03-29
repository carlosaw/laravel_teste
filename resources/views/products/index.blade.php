<x-layout page="Aw2web | Produtos">

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
        name='NOME'
        value='Preço R$'
        quantity='Qtde.'
        actions='Ações'
      >
      </x-tableTitle>           
    </thead>

    @if ($search)
      <p class="p_search">Buscando por: <strong>'{{ $search }}'</strong></p> 
    @endif

    <tbody>      
      @foreach ($products as $product)            
        <tr class="tr_body">
          <td class="tdLine1p">{{$product->id ?? ''}}</td>
          <td class="tdLine2p">{{$product->name ?? ''}}</td>
          <td class="tdLine3p">{{$product->value ?? ''}}</td>
          <td class="tdLine4p">{{$product->quantity ?? ''}}</td>
          <td class="tdLine5p">
            <div class="actions">
              <a title="Editar" href="{{route('product.edit', ['id' => $product->id])}}">
                <img src="/assets/images/icon-edit.png" />
              </a>
              <a onclick="return confirm('Tem certeza que deseja excluir? Este processo é irreversível!')" title="Excluir" href="{{route('product.delete', ['id' => $product->id])}}">
                <img src="/assets/images/icon-delete.png" />
              </a>
            </div>                                    
          </td>
        </tr>        
      @endforeach
      @if(count($products) == 0 && $search)
        <p>Não foi possível encontrar nenhum produto com o nome <strong style="color:red">"{{ $search }}".</strong>
          <a href="/vehicles" style="color:blue">
            Ver todos os Produtos
          </a>
        </p>
      @elseif(count($products) == 0)
      <p>Este Produto não existe!</p>
      @endif          
    </tbody>
  
  </table>
</x-layout>