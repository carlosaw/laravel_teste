<x-layout page="Aw2web | Novo Veiculo">

  @if (session('alert'))
    <div id="alert">
      <div id="alert-success" class="alert-success">
        {{ session('alert') }}
      </div>
    </div>        
  @endif

  <x-form.form_errors />
  
  <div class="form">    
    <h1>Cadastrar Veículo</h1>    
    <form method="POST" action="{{ route('vehicle.create_action') }}">
      @csrf
      <x-form.text_input name="plate" label="Placa do Veículo" placeholder="Digite a Placa do veículo" autofocus required/>
          
      <x-form.text_input name="brand" label="Marca" placeholder="Digite a Marca do veículo"/>

      <x-form.text_input name="model" label="Modelo" placeholder="Digite a Modelo do veículo"/>

      <x-form.text_input name="color" label="Cor" placeholder="Digite a Cor do veículo"/>

      <x-form.text_input name="year" label="Ano" placeholder="Digite o Ano do veículo"/>
      <x-form.text_input name="km" label="Km" placeholder="Digite a Quilometragem do veículo"/>

      <x-form.select_input name="client_id" label="Cliente" selectItem='Selecione um Cliente'>
        @foreach ($clients as $client)
          <option value="{{ $client->id }}">{{ $client->name }}</option>
        @endforeach
      </x-form.select_input>

      <x-form.form_button resetTxt='Limpar' submitTxt='Cadastrar' ></x-form.form_button>

    </form>
    
  </div>
</x-layout>
