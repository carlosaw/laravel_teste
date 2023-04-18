<x-layout page='Aw2web | Home'>

  <div class="user_home">
    <div class="user_title">
      <h4>Bem vindo(a)</h4>
      <div class="user_name">
        {{$AuthUser->name}}
      </div>
    </div>
    <div class="car">
      <img src="/assets/images/lotus_resized_resized.png" alt="" />
    </div>
  </div>
 
</x-layout>