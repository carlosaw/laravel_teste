<div class="list_header">
  <div class="date">
    {{ date('d/m/Y') }}
  </div>
  @if (request()->is('clients'))
    <div class="search_form">
      <form action="../clients" method="GET">
        <input type="search" id="search" name="search" placeholder="Procure por Nome ou Cpf" />
        <button class="search_submit" type="submit" id="search-sub" name="search-sub" title="search-sub">
          <img src="assets/images/search.png" alt=""/>
        </button>
      </form>
    </div>
    
  @elseif(request()->is('vehicles'))
  <div class="search_form">
    <form action="../vehicles" method="GET">
      <input type="search" id="search" name="search" placeholder="Procure por PLACA" />
      <button class="search_submit" type="submit" id="search-sub" name="search-sub" title="search-sub">
        <img src="assets/images/search.png" alt=""/>
      </button>
    </form>
  </div>  
  
  @elseif (request()->is('addresses'))
  <div class="search_form">
    <form action="../addresses" method="GET">
      <input type="search" id="search" name="search" placeholder="Procure por Rua ou Cep" />
      <button class="search_submit" type="submit" id="search-sub" name="search-sub" title="search-sub">
        <img src="assets/images/search.png" alt=""/>
      </button>
    </form>
  </div>

  @elseif (request()->is('products'))
  <div class="search_form">
    <form action="../products" method="GET">
      <input type="search" id="search" name="search" placeholder="Procure por NOME" />
      <button class="search_submit" type="submit" id="search-sub" name="search-sub" title="search-sub">
        <img src="assets/images/search.png" alt=""/>
      </button>
    </form>
  </div>

  @elseif (request()->is('orders'))
  <x-all allSelect='Todos os Serviços'></x-all>
  
  @elseif (request()->is('mechanics'))
  <div class="search_form">
    <form action="../mechanics" method="GET">
      <input type="search" id="search" name="search" placeholder="Procure por NOME" />
      <button class="search_submit" type="submit" id="search-sub" name="search-sub" title="search-sub">
        <img src="assets/images/search.png" alt=""/>
      </button>
    </form>
  </div>
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