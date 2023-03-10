<div class="list_header">
  <div class="date">
    {{ date('d-m-Y') }}
  </div> 

  @if(request()->is('vehicles'))
    <x-all allSelect='Todos os Veículos'></x-all>
  @elseif (request()->is('clients'))
    <x-all allSelect='Todos os Clientes'></x-all>
  @elseif (request()->is('addresses'))
    <x-all allSelect='Todos os Endereços'></x-all>
  @elseif (request()->is('products'))
    <x-all allSelect='Todos os Produtos'></x-all>
  @elseif (request()->is('orders'))
    <x-all allSelect='Todos os Serviços'></x-all>
  @elseif (request()->is('mechanics'))
    <x-all allSelect='Todos os Mecânicos'></x-all>
  @endif

  <div class="btnNew">
    @if(request()->is('vehicles'))
      <a href="#">Novo Veículo</a>
    @elseif(request()->is('clients'))
      <a href="#">Novo Cliente</a>
    @elseif(request()->is('addresses'))
      <a href="#">Novo Endereço</a>
    @elseif(request()->is('products'))
      <a href="#">Novo Produto</a>
    @elseif(request()->is('orders'))
      <a href="#">Nova Ordem</a>
    @elseif(request()->is('mechanics'))
      <a href="#">Novo Mecânico</a>
    @endif
    
  </div>          
</div>