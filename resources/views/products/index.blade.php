<x-layout page="Aw2web | Produtos">

  <x-subMenu />
    
  <table border="1">
    <thead>            
      <x-tableTitle
        id='ID'
        name='Nome'
        value='Preço R$'
        quantity='Qtde.'
        actions='Ações'
      >
      </x-tableTitle>           
    </thead>

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
              <a title="Excluir" href="{{route('product.delete', ['id' => $product->id])}}">
                <img src="/assets/images/icon-delete.png" />
              </a>
            </div>                                    
          </td>
        </tr>        
      @endforeach          
    </tbody>
  
  </table>
</x-layout>
