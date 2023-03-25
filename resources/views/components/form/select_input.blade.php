<div class="inputArea">
    <label for="{{$name}}">
        {{$label ?? ''}}
    </label>
    <select
        id="{{$name}}"
        name="{{$name}}"
        {{empty($required) ? '' : 'required'}}
        value="{{$value ?? ''}}"
        >
        <option selected disabled value="">{{$selectItem ?? ''}}</option>
        {{$slot}}
    </select>
</div>