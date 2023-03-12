<x-layout page="Aw2web | Veiculos">

  <x-subMenu />
  
  @if(request()->is('vehicles'))
         
     
    @foreach($vehicles as $vehicle) 
        
      <x-table :data=$vehicle>
        
      </x-table>
    @endforeach
    
  @endif
  
</x-layout>
