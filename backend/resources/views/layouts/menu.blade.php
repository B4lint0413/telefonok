@php
$phones = [
    1 => "iPhone",
    2 => "Pixel",
    3 => "3310",
    4 => "Moto G54"   
];
@endphp

<nav class="navbar navbar-expand-md bg-body-tertiary" data-bs-theme="dark" style="background-color: #233049;">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('home')}}">Telefonok</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
            @php
                $url = route("home");
            @endphp

            @if(request()->routeIs("home"))
                <a class="nav-link active" aria-current="page" href="{{$url}}">Főoldal</a>
            @else
            <a class="nav-link" href="{{$url}}">Főoldal</a>
            @endif
        </li>
        @foreach($phones as $id => $name)
            @php
                $url = route("phones.show", ["id" => $id]);
            @endphp

            @if(request()->routeIs("phones.show") && request()->route("id") == $id)
                <a class="nav-link active" aria-current="page" href="{{$url}}">{{$name}}</a>
            @else
            <a class="nav-link" href="{{$url}}">{{$name}}</a>
            @endif
        @endforeach
      </ul>
    </div>
  </div>
</nav>