<x-layout page="Aw2web | Editar Cliente">
  <div class="form"> 
    <h1>Editar Cliente</h1>

    <form method="POST" action="{{route('client.edit_action')}}">
      @csrf
      <input type="hidden" name="id" value="{{$clients->id}}" />
      <x-form.text_input value="{{$clients->name}}" name="name" label="Nome do Cliente" autofocus required/>
          
      <x-form.text_input value="{{$clients->cpf}}" name="cpf" label="Cpf"/>

      <x-form.text_input value="{{$clients->fone}}" name="fone" label="Telefone"/>

      <x-form.text_input value="{{$clients->email}}" name="email" label="E-mail" disabled />

      <x-form.form_button type="reset" resetTxt='Limpar' submitTxt='Atualizar' ></x-form.form_button>

    </form>
  </div>  
</x-layout>