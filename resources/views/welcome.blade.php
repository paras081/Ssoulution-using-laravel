@extends('layouts.main')
@section('content')


    <div class="container">
        <hr>
        <h1 class="display-6 d-flex justify-content-center">Grow Your Business with SustainableSolutions</h1>
        <hr>
        <div class="row">
            @foreach ($technologyTables as $technologyTable)
{{--            @for ($i=0;$i<3;$i++)--}}
                <div class="col mb-3">
                <div class="card" style="width: 25rem">
                    <img
                        src=" {{ url('/demo/img/technology_table_img/'.$technologyTable->techImage_url) }} "
                        class="card-img-top"
                        alt="..."
                        style="height: 350px"
                    />
                    <div class="card-body">
                        <h5 class="card-title text-dark">{{ $technologyTable->TechHeading }}</h5>
                        <p class="card-text" style="height: 250px">
                            {{ $technologyTable->TechDesc }}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
{{--            <div class="col-md">--}}
{{--                <div class="card" style="width: 25rem">--}}
{{--                    <img--}}
{{--                        src="https://mdbootstrap.com/img/new/standard/nature/182.jpg"--}}
{{--                        class="card-img-top"--}}
{{--                        alt="..."--}}
{{--                    />--}}
{{--                    <div class="card-body">--}}
{{--                        <h5 class="card-title text-dark">Card title</h5>--}}
{{--                        <p class="card-text">--}}
{{--                            Some quick example text to build on the card title and make up the bulk of the--}}
{{--                            card's content.--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md">--}}
{{--                <div class="card" style="width: 25rem">--}}
{{--                    <img--}}
{{--                        src="https://mdbootstrap.com/img/new/standard/nature/182.jpg"--}}
{{--                        class="card-img-top"--}}
{{--                        alt="..."--}}
{{--                    />--}}
{{--                    <div class="card-body">--}}
{{--                        <h5 class="card-title text-dark">Card title</h5>--}}
{{--                        <p class="card-text">--}}
{{--                            Some quick example text to build on the card title and make up the bulk of the--}}
{{--                            card's content.--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
@endsection
