<x-layout page='Aw2web | Registro'> 

    <div class="form">
        <h1>Registrar-se</h1>

        <x-form.form_errors />

        <form method="POST" action="{{route('user.register_action')}}">
            @csrf
            <x-form.text_input name="name" label="Seu nome" placeholder="Seu nome" autofocus required/>

            <x-form.text_input type="email" name="email" label="Seu e-mail" placeholder="Seu e-mail" required />

            <x-form.text_input type="password" name="password" label="Sua senha" placeholder="Sua senha" required/>

            <x-form.text_input type="password" name="password_confirmation" label="Confirme sua senha" placeholder="Confirme sua senha" required/>

            <x-form.form_button resetTxt="Limpar" submitTxt="Registrar-se"/>        
        </form>
    </div>
</x-layout>
