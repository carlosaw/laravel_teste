<x-layout page="Aw2web | Veiculos">

  <x-subMenu />

  @php
      $vehicles = [
        [
          'id' => 1,
          'plate' => 'OBC1385',
          'brand' => 'Honda',
          'model' => 'Civic',
          'color' => 'Branca',
          'year' => '2012',
          'km' => 82.532
        ],
        [
          'id' => 2,
          'plate' => 'ABC1234',
          'brand' => 'Ford',
          'model' => 'Corcel',
          'color' => 'Amarela',
          'year' => '1978',
          'km' => 50.353
        ],
      ];
    @endphp
    
  
  @if(request()->is('vehicles'))
    <x-table :data=$vehicles[0] 
      item1='Placa' 
      item2='Marca' 
      item3='Modelo' 
      item4='Cor'
      item5='Ano' 
      item6='Km'
      item7='Ações'
      >
    </x-table>
    
  @endif
  
</x-layout>
