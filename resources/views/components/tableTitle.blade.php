@if (request()->is('vehicles'))
  <thead>
    <tr class="title">
      <th scope="col">{{$id ?? ''}}</th>      
      <th scope="col">{{$plate ?? ''}}</th>
      <th scope="col">{{$brand ?? ''}}</th>
      <th scope="col">{{$model ?? ''}}</th>
      <th scope="col">{{$color ?? ''}}</th>
      <th scope="col">{{$year ?? ''}}</th>
      <th scope="col">{{$km ?? ''}}</th>
      <th scope="col">{{$actions ?? ''}}</th>
    </tr>
  </thead>
@elseif (request()->is('clients')) 
  <thead>
    <tr class="title">
      <th scope="col">{{$id ?? ''}}</th>       
      <th scope="col">{{$name ?? ''}}</th>      
      <th scope="col">{{$address ?? ''}}</th>
      <th scope="col">{{$cpf ?? ''}}</th>
      <th scope="col">{{$fone ?? ''}}</th>
      <th scope="col">{{$email ?? ''}}</th>
      <th scope="col">{{$actions ?? ''}}</th>      
    </tr>
  </thead>
@endif