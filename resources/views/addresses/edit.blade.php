<x-layout page="Aw2web | Editar Endereço">
    
  <div class="form">
      <h1>Editar Endereço</h1>

    <form method="POST" action="{{ route('address.edit_action') }}">
      @csrf
      <input type="hidden" name="id" value="{{$addresses->id}}" />
      <x-form.text_input value="{{$addresses->street}}" name="street" label="Rua" autofocus />
          
      <x-form.text_input value="{{$addresses->number}}" name="number" label="Nº"/>

      <x-form.text_input value="{{$addresses->cep}}" name="cep" label="cep"/>

      <x-form.text_input value="{{$addresses->district}}" name="district" label="Bairro"/>

      <x-form.text_input value="{{$addresses->city}}" name="city" label="Cidade"/>

      <x-form.text_input value="{{$addresses->state}}" name="state" label="UF"/>
      

        <x-form.select_input name="client_id" label="Cliente" selected selectItem>
          @foreach ($clients as $client)
            
            <option value="{{$client->id}}" 
              @if ($client->id===$addresses->client_id)
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