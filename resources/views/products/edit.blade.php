<x-layout page="Aw2web | Editar Produto">
    <div class="form">
    <h1>Editar Produto</h1>
    <form method="POST" action="{{ route('product.edit_action') }}">
        @csrf
        <input type="hidden" name="id" value="{{$products->id}}" />
        <x-form.text_input value="{{$products->name}}" name="name" label="Nome do Produto" autofocus/>

        <x-form.text_input value="{{$products->value}}" name="value" label="Preço R$"/>

        <x-form.text_input value="{{$products->quantity}}" type="number" name="quantity" label="Qtde."/>

        <x-form.form_button resetTxt='Limpar' submitTxt='Atualizar' ></x-form.form_button>

      </form>

    </div>
</x-layout>