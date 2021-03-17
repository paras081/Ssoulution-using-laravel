@extends('layouts.mainAdmin')
@section('content')

    <div class="container" style="height:650px" >
        <h1>Insert Technology</h1>
        <div class="d-flex align-items-start mb-3">
            <div class="col"></div>
            <div class="col center">
                 <form action="{{ route('storeTechnology') }}" method="post" enctype="multipart/form-data">
{{--                     {{ csrf_field() }}--}}
                @csrf
            <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="text" id="form1Example1" name="TechTitle" class="form-control" />
                    <label class="form-label" for="form1Example1">Technology Title</label>
                </div>

                <!-- Password input -->
                     <div class="form-outline mb-4">
                         <textarea class="form-control" id="textAreaExample" name="TechDesc" rows="8"></textarea>
                         <label class="form-label" for="textAreaExample">Technology Description</label>
                     </div>

                     <label class="form-label" for="techImage_url">Image for technology</label>
                     <input type="file" class="form-control mb-4" id="techImage_url"  name="techImage_url"/>
                <!-- Submit button -->
                <button type="submit" class="btn btn-light btn-block" style="background-color:#C9C9C9">Insert</button>
              </form>
            </div>
            <div class="col">
            </div>
        </div>
        @if(session('successMsg'))
            <div class="alert alert-success" role="alert">
                {{ session('successMsg') }}
            </div>
        @endif
    </div>

@endsection
