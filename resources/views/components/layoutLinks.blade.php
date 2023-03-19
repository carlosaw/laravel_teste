@if (request()->is('vehicles/new'))
  <x-btnselect btnHref='/vehicles' btnText='Veículos'></x-btnselect>
  <x-btn btnHref='/clients' btnText='Clientes'></x-btn>
  <x-btn btnHref='/addresses' btnText='Endereços'></x-btn>
  <x-btn btnHref='/products' btnText='Produtos'></x-btn>
  <x-btn btnHref='/orders' btnText='Serviços'></x-btn>
  <x-btn btnHref='/mechanics' btnText='Mecânicos'></x-btn>
          
@elseif (request()->is('clients/new'))
  <x-btn btnHref='/vehicles' btnText='Veiculos'></x-btn>
  <x-btnselect btnHref='/clients' btnText='Clientes'></x-btnselect>
  <x-btn btnHref='/addresses' btnText='Endereços'></x-btn>
  <x-btn btnHref='/products' btnText='Produtos'></x-btn>
  <x-btn btnHref='/orders' btnText='Serviços'></x-btn>
  <x-btn btnHref='/mechanics' btnText='Mecânicos'></x-btn>          

@elseif (request()->is('addresses/new'))
  <x-btn btnHref='/vehicles' btnText='Veiculos'></x-btn>
  <x-btn btnHref='/clients' btnText='Clientes'></x-btn>
  <x-btnselect btnHref='/addresses' btnText='Endereços'></x-btnselect>
  <x-btn btnHref='/products' btnText='Produtos'></x-btn>
  <x-btn btnHref='/orders' btnText='Serviços'></x-btn>
  <x-btn btnHref='/mechanics' btnText='Mecânicos'></x-btn>          

@elseif (request()->is('products/new'))
  <x-btn btnHref='/vehicles' btnText='Veiculos'></x-btn>
  <x-btn btnHref='/clients' btnText='Clientes'></x-btn>
  <x-btn btnHref='/addresses' btnText='Endereços'></x-btn>
  <x-btnselect btnHref='/products' btnText='Produtos'></x-btnselect>
  <x-btn btnHref='/orders' btnText='Serviços'></x-btn>
  <x-btn btnHref='/mechanics' btnText='Mecânicos'></x-btn>          

@elseif (request()->is('orders/new'))
  <x-btn btnHref='/vehicles' btnText='Veiculos'></x-btn>
  <x-btn btnHref='/clients' btnText='Clientes'></x-btn>
  <x-btn btnHref='/addresses' btnText='Endereços'></x-btn>
  <x-btn btnHref='/products' btnText='Produtos'></x-btn>
  <x-btnselect btnHref='/orders' btnText='Serviços'></x-btnselect>
  <x-btn btnHref='/mechanics' btnText='Mecânicos'></x-btn>          

@elseif (request()->is('mechanics/new'))
  <x-btn btnHref='/vehicles' btnText='Veiculos'></x-btn>
  <x-btn btnHref='/clients' btnText='Clientes'></x-btn>
  <x-btn btnHref='/addresses' btnText='Endereços'></x-btn>
  <x-btn btnHref='/products' btnText='Produtos'></x-btn>
  <x-btn btnHref='/orders' btnText='Serviços'></x-btn>
  <x-btnselect btnHref='/mechanics' btnText='Mecânicos'></x-btnselect>          
@endif      