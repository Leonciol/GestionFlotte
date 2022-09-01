

<select name="{{$name}}">
        <option value="">{{$placeholder}}</option>
    @foreach ($values as $v )
    <option value="{{$v->id}}">@foreach ($keys as $key)
        {{$v[$key]}}

    @endforeach</option>
        @endforeach
</select>
