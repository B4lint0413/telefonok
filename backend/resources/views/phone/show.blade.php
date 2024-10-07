@extends("layouts.main")

@section("title", $title)
@section("content")
    <div class="container">
        <h1>{{$title}}</h1>
        <div class="row">
            <div class="col-4">
                <img class="img-fluid" src="{{asset('img/' . $phone['id'] . '.jpg')}}" alt="{{$phone['manufacturer']}} {{$phone['model']}}">
            </div>
            <div class="col-8">
                <ul>
                    <li>{{$phone['manufacturer']}}</li>
                    <li>{{$phone['model']}}</li>
                    <li>{{$phone['color']}}</li>
                    <li>
                        Tárhely:
                        @if(is_null($phone['storage']))
                        nincs
                        @else
                        {{$phone['storage']}} GB
                        @endif
                    </li>
                    <li>
                        {{number_format($phone["price"], "0", ",", " ")}} Ft
                    </li>
                </ul>
                <p>
                    {{$phone['description']}}
                </p>
                <a href="{{route('home')}}">Vissza a főoldalra</a>
            </div>
        </div>
    </div>
@endsection