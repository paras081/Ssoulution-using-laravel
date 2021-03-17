@extends('layouts.mainAdmin')
@section('content')

    <div class="container" style="height:auto" >
        <h1 class="display-6 d-flex justify-content-center mb-4">Insert Portfolio Items</h1>
        @if(session('successMsg'))
            <div class="alert alert-success" role="alert">
                {{ session('successMsg') }}
            </div>
        @endif
        <div class="d-flex align-items-start mb-3">
            <div class="col"></div>
            <div class="col center">
                 <form  method="POST" action="{{ route('storePortfolio') }}" enctype="multipart/form-data">
{{--                     {{ csrf_field() }}--}}
                @csrf
            <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="text" id="FolioHeading" name="FolioHeading" class="form-control" />
                    <label class="form-label" for="FolioHeading">Portfolio Title</label>
                </div>

                <!-- Password input -->
                     <div class="form-outline mb-4">
                         <input type="text" class="form-control" id="FolioShortDesc" name="FolioShortDesc" rows="8"></input>
                         <label class="form-label" for="FolioShortDesc">Portfolio Short Description</label>
                     </div>

                    <div class="form-outline mb-4">
                        <textarea class="form-control" id="FolioDesc" name="FolioDesc" rows="8"></textarea>
                        <label class="form-label" for="FolioDesc">Portfolio Description</label>
                    </div>

                    <input type="file" class="form-control" id="FolioImageUrl"  name="FolioImageUrl"/>
                    <label class="form-label mb-4" for="FolioImageUrl">Portfolio Banner Image</label>

                    <input type="file" class="form-control" id="FolioImageUrl2"  name="FolioImageUrl2"/>
                    <label class="form-label mb-4" for="FolioImageUrl2">Portfolio Description Image</label>

                    <input type="text" class="form-control" id="FolioWebsiteUrl"  name="FolioWebsiteUrl"/>
                    <label class="form-label" for="FolioWebsiteUrl">Portfolio Website Link</label>
                    <!-- Submit button -->
                <button type="submit" class="btn btn-light btn-block" style="background-color:#C9C9C9">Insert Portfolio</button>
              </form>
            </div>
            <div class="col">
            </div>
        </div>
    </div>

@endsection
