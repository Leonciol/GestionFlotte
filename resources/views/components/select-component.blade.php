

<div>
    <select name="{{$name}}">
        <option value="">{{$placeholder}} </option>

    @foreach ($values as $v )
        <option value="{{$v->id}}" @if ($default == $v->id) selected @endif>
            @foreach ($keys as $key)
                {{$v[$key]}}
            @endforeach
        </option>
    @endforeach
</select>
</div>
