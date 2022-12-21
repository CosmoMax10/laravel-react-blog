@if ($errors->any())
    <ul class="alert">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    <h3>hey!</h3>
@endif
