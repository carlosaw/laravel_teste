<x-layout page='Aw2web | Registro'> 
<x-form.form_errors />
    <div class="form">
        <h1>Registrar-se</h1>

        

        <form method="POST" action="{{route('user.register_action')}}">
            @csrf
            <x-form.text_input name="name" label="Seu nome" placeholder="Seu nome" autofocus required/>

            <x-form.text_input type="email" name="email" label="Seu e-mail" placeholder="Seu e-mail"/>

            <x-form.text_input type="password" name="password" label="Sua senha" placeholder="Sua senha"/>

            <x-form.text_input type="password" name="password_confirmation" label="Confirme sua senha" placeholder="Confirme sua senha"/>

            <x-form.form_button resetTxt="Limpar" submitTxt="Registrar-se"/>        
        </form>
    </div>
</x-layout>
