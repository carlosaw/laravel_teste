<x-layout page='Aw2web | Ordem Serv.'>

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
        vehicle='Veículo'
        mechanic='Mecânico'
        actions='Ações'
      >
      </x-tableTitle>    
    </thead>

    @if ($search)
      <p class="p_search">Buscando por: <strong>'{{ $search }}'</strong></p> 
    @endif

    <tbody>      
      @foreach ($orders as $order)          
        <tr class="tr_body">
          <td class="tdLine1o">{{$order->id ?? ''}}</td>          
          <td class="tdLine2o">{{$order->client['name'] ?? ''}}</td>
          <td class="tdLine3o">{{$order->vehicle['plate'] ?? ''}}</td>
          <td class="tdLine4o">{{$order->mechanic['name'] ?? ''}}</td>  
          <td class="tdLine5o">
            <div class="actions">
              <a title="Editar" href="{{route('order.edit', ['id' => $order->id])}}">
                <img src="/assets/images/icon-edit.png" title="Editar"/>
              </a>              
              <a onclick="return confirm('Tem certeza que deseja excluir? Este processo é irreversível!')" title="Excluir" href="{{route('order.delete', ['id' => $order->id])}}">
                <img src="/assets/images/icon-delete.png" title="Excluir"/>
              </a>
            </div>                                    
          </td>
        </tr>       
      @endforeach
      @if(count($orders) == 0 && $search)
        <p>
          Não foi possível encontrar nenhuma Ordem de Serviços <strong style="color:red">"{{ $search }}".</strong>
          <a href="/orders" style="color:blue">
            Ver todos as Ordens de Serviços
          </a>
        </p> 
      @elseif(count($orders) == 0)
        <p>Este existem Ordens de Serviços!</p>
      @endif
    </tbody>

  </table>
</x-layout>