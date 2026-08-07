<h1>Hello {{$nome}}</h1><br>

<h3>Seus hábitos são:</h3><br>

@foreach($habitos as $item)
    <ul>
        <li>{{$item}}</li>
    </ul>
@endforeach