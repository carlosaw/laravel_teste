<a href="{{$btnHref ?? ''}}" class="{{(request()->is($btnHref)) ? 'btn btn-selected' : 'btn btn-primary'}}" type="{{$type ?? ''}}">
    {{$btnText ?? ''}}
</a>