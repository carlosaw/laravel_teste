<x-layout page="Aw2web | Novo Veiculo">
    
    <section id="create_vehicle_section">
        <h1>Cadastrar Veículo</h1>
       
        <form method="POST" action="{{route('vehicle.create_action')}}">
            @csrf
            <x-form.text_input 
                name="plate" label="Placa do Veículo" placeholder="Digite a Placa do veículo" autofocus required />

            <x-form.text_input 
                name="brand" label="Marca" placeholder="Digite a Marca do veículo"/>
            
            <x-form.text_input 
                name="model" label="Modelo" placeholder="Digite a Modelo do veículo" />

            <x-form.text_input 
                name="color" label="Cor" placeholder="Digite a Cor do veículo" />
            
            <x-form.text_input 
                name="year" label="Ano" placeholder="Digite o Ano do veículo"/>

            <x-form.select_input 
                name="client_id"
                label="Cliente"
                selectItem='Selecione um Cliente'
            >
            @foreach($clients as $client)
                <option value="{{$client->id}}">{{$client->name}}</option>
            @endforeach
            </x-form.select_input>
            
            <div class="btns_form">
                <div class="inputArea">
                    <button type="reset" class="btnNew">Resetar</button>
                </div>
                <div class="inputArea">
                    <button type="submit" class="btnNew">Enviar</button>
                </div>                  
            </div>
            
        </form>
    </section>
</x-layout>
