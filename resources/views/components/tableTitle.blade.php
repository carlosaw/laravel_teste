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
    <th class="title3">{{$cpf ?? ''}}</th>
    <th class="title4">{{$fone ?? ''}}</th>
    <th class="title5">{{$email ?? ''}}</th>
    <th class="title6">{{$actions ?? ''}}</th>      
  </tr>

  @elseif (request()->is('addresses'))
  <tr class="title">
    <th class="title1a">{{$id ?? ''}}</th>
    <th class="title2a">{{$client ?? ''}}</th>
    <th class="title3a">{{$street ?? ''}}</th>
    <th class="title4a">{{$number ?? ''}}</th>   
    <th class="title5a">{{$cep ?? ''}}</th>
    <th class="title6a">{{$district ?? ''}}</th>
    <th class="title7a">{{$city ?? ''}}</th>
    <th class="title8a">{{$state ?? ''}}</th>
    <th class="title9a">{{$actions ?? ''}}</th>    
  </tr>
  @elseif (request()->is('products'))   
  <tr class="title">
    <th class="title1p">{{$id ?? ''}}</th>       
    <th class="title2p">{{$name ?? ''}}</th>
    <th class="title3p">{{$value ?? ''}}</th>      
    <th class="title4p">{{$quantity ?? ''}}</th>
    <th class="title5p">{{$actions ?? ''}}</th>
  </tr>
  @elseif (request()->is('mechanics'))   
  <tr class="title">
    <th class="title1m">{{$id ?? ''}}</th>       
    <th class="title2m">{{$name ?? ''}}</th>
    <th class="title3m">{{$phone ?? ''}}</th>      
    <th class="title4m">{{$percentage ?? ''}}</th>
    <th class="title7m">{{$actions ?? ''}}</th>
  </tr>

@endif