<x-layout page="Aw2web | Nova OS">
   
  @if (session('alert'))
  <div id="alert">
    <div id="alert-success" class="alert-success">
      {{ session('alert') }}
    </div>
  </div>
  @endif

  <div class="form">
    <h1>Nova Ordem de Serviços</h1>

    <form method="POST" action="{{ route('order.create_action') }}">
      {{-- <form method="POST"> --}}
      @csrf
      <x-form.select_input name="client_id" label="Cliente" selectItem='Selecione um Cliente'>
        @foreach ($clients as $client)
          <option value="{{ $client->id }}">{{$client->name}}</option>
        @endforeach       
      </x-form.select_input>

      <x-form.select_input name="vehicle_id" label="Veículo" selectItem='Selecione um Veículo'>
        @foreach ($vehicles as $vehicle)
          <option value="{{ $vehicle->id }}">{{$vehicle->plate}}</option>
        @endforeach
      </x-form.select_input>

      <x-form.select_input name="mechanic_id" label="Mecânico" selectItem='Selecione um Mecânico'>
        @foreach ($mechanics as $mechanic)
          <option value="{{ $mechanic->id }}">{{ $mechanic->name }}</option>
        @endforeach
      </x-form.select_input>

      <x-form.form_button resetTxt='Limpar' submitTxt='Cadastrar'></x-form.form_button>

    </form>

  </div> 
    
</x-layout>
