<x-layout page="Aw2web | Editar Veiculo">

  <div class="form">
      <h1>Editar Veículo</h1>

    <form method="POST" action="{{route('vehicle.edit_action')}}">
      @csrf
      <input type="hidden" name="id" value="{{$vehicles->id}}" />
      <x-form.text_input value="{{$vehicles->plate}}" name="plate" label="Placa do Veículo" autofocus />
          
      <x-form.text_input value="{{$vehicles->brand}}" name="brand" label="Marca" placeholder="Digite a Marca do veículo"/>

      <x-form.text_input value="{{$vehicles->model}}" name="model" label="Modelo" placeholder="Digite a Modelo do veículo"/>

      <x-form.text_input value="{{$vehicles->color}}" name="color" label="Cor" placeholder="Digite a Cor do veículo"/>

      <x-form.text_input value="{{$vehicles->year}}" name="year" label="Ano" placeholder="Digite o Ano do veículo"/>
      <x-form.text_input value="{{$vehicles->km}}" name="km" label="Km" placeholder="Digite a Quilometragem do veículo"/>

      <x-form.select_input name="client_id" label="Cliente" selected selectItem>
        @foreach ($clients as $client)
          
          <option value="{{$client->id}}" 
            @if ($client->id===$vehicles->client_id)
              {{'selected';}} selectItem={{$client->name}}
            @endif
          >{{ $client->name }}
          </option>
        @endforeach
      </x-form.select_input>

      <x-form.form_button resetTxt='Limpar' submitTxt='Atualizar' ></x-form.form_button>

    </form>
    
  </div>
</x-layout>
