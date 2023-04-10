<x-layout page="Aw2web | Novo Produto">

  @if (session('alert'))
    <div id="alert">
      <div id="alert-success" class="alert-success">
        {{ session('alert') }}
      </div>
    </div>        
  @endif
  
  <div class="form">
    <h1>Novo Produto</h1>
    <form method="POST" action="{{ route('product.create_action') }}">
        @csrf
        <x-form.text_input name="name" label="Nome do Produto" placeholder="Digite o nome do produto" autofocus required/>

        <x-form.text_input name="value" label="Preço R$" placeholder="Digite o Preço"/>

        <x-form.text_input type="number" name="quantity" label="Qtde." placeholder="Digite a quantidade"/>

        <x-form.form_button resetTxt='Limpar' submitTxt='Cadastrar' ></x-form.form_button>
      </form>

    </div>
</x-layout>