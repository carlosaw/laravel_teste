<x-layout page='Aw2web | Editar Mecânico'>

  @if (session('alert'))
    <div id="alert">
      <div id="alert-success" class="alert-success">
        {{ session('alert') }}
      </div>
    </div>        
  @endif

  <div class="form">
    <h1>Editar Mecânico</h1>
    <form method="POST" action="{{ route('mechanic.edit_action') }}">
        @csrf
        <input type="hidden" name="id" value="{{$mechanics->id}}" />
        <x-form.text_input value="{{$mechanics->name}}" name="name" label="Nome do Mecânico" autofocus/>

        <x-form.text_input value="{{$mechanics->phone}}" name="phone" label="Telefone"/>

        <x-form.text_input value="{{$mechanics->percentage}}" name="percentage" label="Comissão"/>

        <x-form.form_button resetTxt='Limpar' submitTxt='Atualizar' ></x-form.form_button>

      </form>

     
</x-layout>