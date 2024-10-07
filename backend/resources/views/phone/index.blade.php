@extends("layouts.main")

@section("title", $title)
@section("content")
    <h1>{{$title}}</h1>
    <div class="container">
        <div class="row align-items-stretch">
            @foreach($phones as $phone)
            <div class="col-12 col-md-6 col-lg-3 py-3">
                <div class="card h-100">
                    <img class="card-img-top" src="{{asset('img/' . $phone['id'] . '.jpg')}}" alt="{{$phone['manufacturer']}} {{$phone['model']}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$phone['manufacturer']}} {{$phone['model']}}</h5>
                        <p class="card-text">{{$phone['description']}}</p>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-8 d-grid">
                                <a class="btn btn-primary" href="{{route('phones.show', ['id' => $phone['id']])}}">{{$phone['manufacturer']}} {{$phone['model']}}</a>
                            </div>
                            <div class="col-4">
                                <span>{{number_format($phone["price"], "0", ",", " ")}} Ft</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection