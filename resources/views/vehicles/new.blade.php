<x-layout page="Aw2web | Novo Veiculo">
    
    <section id="create_vehicle_section">
        <h1>Cadastrar Veículo</h1>
        <form>
            <x-form.text_input 
                name="plate" label="Placa do Veículo" placeholder="Digite a Placa do veículo" autofocus="autofocus" required='required'
            ></x-form.text_input>
            <div class="inputArea">
                <label for="brand">
                    Marca
                </label>
                <input id="brand" name="brand" required placeholder="Digite a Marca do veículo" autofocus/>
            </div>
            <div class="inputArea">
                <label for="model">
                    Modelo
                </label>
                <input id="model" name="model" required placeholder="Digite o Modelo do veículo" />
            </div>
            <div class="inputArea">
                <label for="color">
                    Cor
                </label>
                <input id="color" name="color" required placeholder="Digite a Cor do veículo" />
            </div>
            <div class="inputArea">
                <label for="year">
                    Ano
                </label>
                <input id="year" name="year" placeholder="Digite o Ano do veículo" />
            </div>
            <div class="inputArea">
                <label for="km">
                    Km
                </label>
                <input id="km" name="km" required placeholder="Digite a Quilometragem do veículo" autofocus/>
            </div>
            <div class="inputArea">
                <label for="client">
                    Cliente
                </label>
                <select id="client" name="client" required>
                    <option selected disabled value="">Selecione o Cliente</option>
                    <option>Valor qualquer</option>
                </select>
            </div>
            <div class="inputArea">
                <button type="submit" class="btnNew">Enviar</button>
            </div>
        </form>
    </section>
</x-layout>
