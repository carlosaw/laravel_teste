<x-layout page="Aw2web | Editar O.S.">

  @if (session('alert'))
    <div id="alert_os">
      <div id="alert-success" class="alert-success">
        {{ session('alert') }}
      </div>
    </div>        
  @endif
  
  <div class="form"> 
    <h1>Editar Ordem de Serviços</h1>

    <form method="POST" action="{{route('order.edit_action')}}">
      @csrf
      <input type="hidden" name="id" value="{{$orders->id}}" />

      <x-form.select_input name="client_id" label="Cliente" selected selectItem>
        @foreach ($clients as $client)         
          <option value="{{$client->id}}" 
            @if ($client->id===$orders->client_id)
              {{'selected';}} selectItem={{$client->name}}
            @endif
          >{{ $client->name }}
          </option>
        @endforeach
      </x-form.select_input>

      <x-form.select_input name="vehicle_id" label="Veículo" selected selectItem>
        @foreach ($vehicles as $vehicle)            
          <option value="{{$vehicle->id}}" 
            @if ($vehicle->id===$orders->vehicle_id)
              {{'selected';}} selectItem={{$vehicle->plate}}
            @endif
          >{{ $vehicle->plate }}
          </option>
        @endforeach
      </x-form.select_input>

      <x-form.select_input name="mechanic_id" label="Mecânico" selected selectItem>
        @foreach ($mechanics as $mechanic)            
          <option value="{{$mechanic->id}}" 
            @if ($mechanic->id===$orders->mechanic_id)
              {{'selected';}} selectItem={{$mechanic->name}}
            @endif
          >{{ $mechanic->name }}
          </option>
        @endforeach
      </x-form.select_input>

      <x-form.form_button type="reset" resetTxt='Limpar' submitTxt='Atualizar' ></x-form.form_button>

    </form>
  </div>  
</x-layout>