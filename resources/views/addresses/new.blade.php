<x-layout page="Aw2web | Novo Endereço">

  @if (session('alert'))
  <div id="alert">
    <div id="alert-success" class="alert-success">
      {{ session('alert') }}
    </div>
  </div>
  @endif

  <div class="form">
    <h1>Novo Endereço</h1>

    <form method="POST" action="{{ route('address.create_action') }}">
      @csrf
      <x-form.text_input name="street" label="Rua" placeholder="Digite o nome da rua" autofocus required />

      <x-form.text_input name="number" label="Nº" placeholder="Digite o número" />

      <x-form.text_input name="cep" label="cep" placeholder="Digite o CEP" />

      <x-form.text_input name="district" label="Bairro" placeholder="Digite o Bairro" />

      <x-form.text_input name="city" label="Cidade" placeholder="Digite a Cidade" />

      <x-form.text_input name="state" label="UF" placeholder="Digite o Estado" />


      <x-form.select_input name="client_id" label="Cliente" selectItem='Selecione um Cliente'>
        @foreach ($clients as $client)
        <option value="{{ $client->id }}">{{ $client->name }}</option>
        @endforeach
      </x-form.select_input>

      <x-form.form_button resetTxt='Limpar' submitTxt='Cadastrar'></x-form.form_button>

    </form>

  </div>
</x-layout>