<x-layout page="Aw2web | Novo Cliente">
  <div class="form"> 
    <h1>Cadastrar Cliente</h1>

    <form method="POST" action="{{ route('client.create_action') }}">
      @csrf
      <x-form.text_input name="name" label="Nome do Cliente" placeholder="Digite o nome do cliente" autofocus required/>

      
          
      <x-form.text_input name="cpf" label="Cpf" placeholder="Digite o Cpf"/>

      <x-form.text_input name="fone" label="Telefone" placeholder="Digite o Telefone"/>

      <x-form.text_input name="email" label="E-mail" placeholder="Digite o E-mail"/>

      <x-form.form_button resetTxt='Limpar' submitTxt='Cadastrar' ></x-form.form_button>

    </form>
  </div>  
</x-layout>