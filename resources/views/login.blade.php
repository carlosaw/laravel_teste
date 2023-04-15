<x-layout page='Aw2web | Login'>

  <div class="form">    
    <x-form.form_errors />
    
    <form method="POST" action="{{ route('user.login_action') }}">
    <h1>Login</h1>
      @csrf
      <x-form.text_input type="email" name="email" label="Seu e-mail" placeholder="Seu e-mail" autofocus />
      <x-form.text_input type="password" name="password" label="Sua senha" placeholder="Sua senha" />
      <x-form.form_button resetTxt="Limpar" submitTxt="Login" />
    </form>
    
  </div>
  
</x-layout>