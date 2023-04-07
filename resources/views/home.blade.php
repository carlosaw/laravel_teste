<x-layout page='Aw2web | Home'>

  <div class="user_home">
    <div class="user_title">
      <h3>Bem vindo(a) - {{$AuthUser->name}}</h3>
    </div>
    <div class="user-logout">
      <a href="{{route('logout')}}">Sair</a>  
    </div> 
  </div>
 
</x-layout>