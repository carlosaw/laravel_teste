@if (request()->is('vehicles'))  
  <tr class="title">
    <th class="title1v">{{$id ?? ''}}</th>      
    <th class="title2v">{{$plate ?? ''}}</th>
    <th class="title3v">{{$brand ?? ''}}</th>
    <th class="title4v">{{$model ?? ''}}</th>
    <th class="title5v">{{$color ?? ''}}</th>
    <th class="title6v">{{$year ?? ''}}</th>
    <th class="title7v">{{$km ?? ''}}</th>
    <th class="title8v">{{$actions ?? ''}}</th>
  </tr>

@elseif (request()->is('clients'))   
  <tr class="title">
    <th class="title1">{{$id ?? ''}}</th>       
    <th class="title2">{{$name ?? ''}}</th>      
    <th class="title3">{{$address ?? ''}}</th>
    <th class="title4">{{$cpf ?? ''}}</th>
    <th class="title5">{{$fone ?? ''}}</th>
    <th class="title6">{{$email ?? ''}}</th>
    <th class="title7">{{$actions ?? ''}}</th>      
  </tr>

@elseif (request()->is('addresses'))   
  <tr class="title">
    <th class="title1a">{{$id ?? ''}}</th>       
    <th class="title2a">{{$street ?? ''}}</th>
    <th class="title3a">{{$number ?? ''}}</th>      
    <th class="title4a">{{$cep ?? ''}}</th>
    <th class="title5a">{{$district ?? ''}}</th>
    <th class="title6a">{{$city ?? ''}}</th>
    <th class="title7a">{{$state ?? ''}}</th>
    <th class="title8a">{{$actions ?? ''}}</th>     
  </tr>

@endif