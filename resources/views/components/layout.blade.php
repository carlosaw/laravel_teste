<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$page ?? 'Aw2web | Home'}}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css" />

</head>

<body>
  <div class="container">
    <div class="sidebar">
      <div class="logo">
        <img src="/assets/images/logo4.png" alt="" />
      </div>
    </div>
    <div class="content">
      <nav>
        @if ($page !== 'Aw2web | Login' && $page !== 'Aw2web | Registro' && $page !== 'Aw2web | Novo Veiculo')
          <x-btn btnHref='vehicles' btnText='Veículos'></x-btn>                  
          <x-btn btnHref='clients' btnText='Clientes'></x-btn>
          <x-btn btnHref='addresses' btnText='Endereços'></x-btn>
          <x-btn btnHref='products' btnText='Produtos'></x-btn>
          <x-btn btnHref='orders' btnText='Serviços'></x-btn>
          <x-btn btnHref='mechanics' btnText='Mecânicos'></x-btn>
        @elseif ($page == 'Aw2web | Novo Veiculo')
          <x-btn btnHref='/vehicles' btnText='Veículos'></x-btn>
          <x-btn btnHref='/clients' btnText='Clientes'></x-btn>
          <x-btn btnHref='/addresses' btnText='Endereços'></x-btn>
          <x-btn btnHref='/products' btnText='Produtos'></x-btn>
          <x-btn btnHref='/orders' btnText='Serviços'></x-btn>
          <x-btn btnHref='/mechanics' btnText='Mecânicos'></x-btn>
        @endif        
        
        @if ($page == 'Aw2web | Login')
          <x-btn btnHref='register' btnText='Registre-se'></x-btn>
        @endif
        @if ($page == 'Aw2web | Registro')
          <p class="frase">Já tem Cadastro?</p>
          <x-btn btnHref='login' btnText='Faça Login'></x-btn>
        @endif 
        
       
      </nav>

      <section class="list">
        <div class="list-content">
          {{$slot}}
        </div>        
      </section>
    </div>
  </div>
</body>

</html>