<div class="list_header">
  <div class="date">
    {{ date('d-m-Y') }}
  </div>

  @if(request()->is('vehicles'))  
  <form action="../vehicles" method="GET">
    <input type="text" id="search" name="search" placeholder="Procure por PLACA" />
  </form>

  @elseif (request()->is('clients'))
  <form action="../clients" method="GET">
    <input type="text" id="search" name="search" placeholder="Procure por NOME" />
  </form>

  @elseif (request()->is('addresses'))
  <form action="../addresses" method="GET">
    <input type="text" id="search" name="search" placeholder="Procure por CLIENTE" />
  </form>
  @elseif (request()->is('products'))
  <form action="../products" method="GET">
    <input type="text" id="search" name="search" placeholder="Procure por PRODUTO" />
  </form>
  @elseif (request()->is('orders'))
  <x-all allSelect='Todos os Serviços'></x-all>
  @elseif (request()->is('mechanics'))
  <x-all allSelect='Todos os Mecânicos'></x-all>
  @endif
  <div class="btnNew">
    @if(request()->is('vehicles'))
    <a href="vehicles/new">Novo Veículo</a>
    @elseif(request()->is('clients'))
    <a href="clients/new">Novo Cliente</a>
    @elseif(request()->is('addresses'))
    <a href="addresses/new">Novo Endereço</a>
    @elseif(request()->is('products'))
    <a href="products/new">Novo Produto</a>
    @elseif(request()->is('orders'))
    <a href="orders/new">Nova Ordem</a>
    @elseif(request()->is('mechanics'))
    <a href="mechanics/new">Novo Mecânico</a>
    @endif
  </div>
</div>