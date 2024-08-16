<nav class="mb-4 font-semibold">
    <ul class="flex space-x-4 text-slate-500">
        <li><a href="/">Home</a></li>

        @foreach($links as $key => $value)
        <li>→</li>
        <li><a href="{{$value}}">{{$key}}</a></li>
        @endforeach

    </ul>
</nav>