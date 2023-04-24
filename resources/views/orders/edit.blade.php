<x-layout page="Aw2web | Editar O.S.">

  @if (session('alert'))
    <div id="alert">
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
            <option value="{{$orders->client_id}}" 
              @if ($client->id===$orders->client_id)
                {{'selected';}} selectItem={{$client->name}}
              @endif
            >{{ $client->name }}
            </option>
          @endforeach
        </x-form.select_input>
          
      <x-form.text_input value="{{$orders->vehicle_id}}" name="vehicle" label="Veículo"/>

      <x-form.text_input value="{{$orders->mechanic_id}}" name="mechanic" label="Mecânico"/>

      <x-form.form_button type="reset" resetTxt='Limpar' submitTxt='Atualizar' ></x-form.form_button>

    </form>
  </div>  
</x-layout>