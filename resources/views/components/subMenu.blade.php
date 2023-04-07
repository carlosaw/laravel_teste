<div class="list_header">
  <div class="date">
    {{ date('d-m-Y') }}
  </div>

  @if(request()->is('vehicles'))
  <div class="search_form">
    <form action="../vehicles" method="GET">
      <input type="search" id="search" name="query" placeholder="Procure por PLACA" />
    </form>
    <div class="search_submit" title="Pesquisar">
      <button type="submit" class="btn_search">
        <img src="assets/images/search.png" alt=""/>
      </button>      
    </div>
  </div>  
  

  @elseif (request()->is('clients'))
  <a>
    <div class="search_form">
      <form action="../clients" method="GET">
        <input type="text" id="search" name="search" placeholder="Procure por NOME" />
        {{-- <div class="search_submit" title="Pesquisar">
          <img src="assets/images/search.png" alt=""/>
        </div> --}}
      </form>
      <button type="submit">Search</button>
    </div>
  </a>
  

  @elseif (request()->is('addresses'))
  <form action="../addresses" method="GET">
    <input type="text" id="search" name="search" placeholder="Procure por RUA" />
  </form>

  @elseif (request()->is('products'))
  <form action="../products" method="GET">
    <input type="text" id="search" name="search" placeholder="Procure por PRODUTO" />
  </form>
  
  @elseif (request()->is('orders'))
  <x-all allSelect='Todos os Serviços'></x-all>
  
  @elseif (request()->is('mechanics'))
  <form action="../products" method="GET">
    <input type="text" id="search" name="search" placeholder="Procure por MECÂNICO" />
  </form>
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