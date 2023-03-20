<div class="inputArea">
    <label for="{{$name}}">
        {{$label ?? ''}}
    </label>
    <input
        type="{{empty($type) ? 'text' : $type}}"
        id="{{$name}}"
        name="{{$name}}" {{$required ? 'required' : ''}}
        placeholder="{{$placeholder ?? ''}}" {{$autofocus ? 'autofocus' : ''}} />
</div>