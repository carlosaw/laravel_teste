<x-layout page='Aw2web | Novo Mecânico'>

  @if (session('alert'))
    <div id="alert">
      <div id="alert-success" class="alert-success">
        {{ session('alert') }}
      </div>
    </div>        
  @endif
  
  <div class="form">
    <h1>Novo Mecânico</h1>
    <form method="POST" action="{{ route('mechanic.create_action') }}">
        @csrf
        <x-form.text_input name="name" label="Nome do Mecânico" placeholder="Digite o nome do mecânico" autofocus required/>

        <x-form.text_input name="phone" label="Telefone" placeholder="Digite o telefone"/>

        <x-form.text_input name="percentage" label="Comissão" placeholder="Digite a porcentagem"/>

        <x-form.form_button resetTxt='Limpar' submitTxt='Cadastrar' ></x-form.form_button>

      </form>

     
</x-layout>