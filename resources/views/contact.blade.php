@extends('layouts.main')
@section('content')

    <div class="container">
        <h1 class="display-6 d-flex">Contact Us</h1>
        <div class="row">
            <div class="col-12">   <!--Google map-->
                <div id="map-container-google-2" class="z-depth-1-half map-container" style="height: 350px">
                    <iframe class="" src="https://maps.google.com/maps?q=rajkot&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                            style="width:100%; height: 350px; border:0" allowfullscreen></iframe>
                </div>
                <!--Google Maps-->
            </div>
            <div class="col-12">
                <hr>
                <h1 class="display-6 d-flex justify-content-center">Getting in touch is easy</h1>
                <hr>
            </div>
            <div class="col-4"> <h5 class="text-uppercase">Find us on Google Map</h5>

                <p>
                    Sustainable Soultions Pvt. Ltd.<br>
                    201-Shreelok,Deepvan Park,<br>
                    Nana mava road,<br>
                    Rajkot-360005,<br>
                    Gujarat,India.
                </p>
            </div>
            <div class="col-6">
                <form method="post" action="{{ route('storeContact') }}">
                    {{ csrf_field() }}
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="row mb-4">
                        <div class="col">
                            <div class="form-outline">
                                <input type="text" id="FirstName" name="FirstName" class="form-control" />
                                <label class="form-label" for="FirstName">First name</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <input type="text" id="LastName" name="LastName" class="form-control" />
                                <label class="form-label" for="LastName">Last name</label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col">
                            <div class="form-outline">
                                <input type="text" id="MobileNo" name="MobileNo" class="form-control" />
                                <label class="form-label" for="MobileNo">Mobile Number</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <input type="text" id="Email" name="Email" class="form-control" />
                                <label class="form-label" for="Email">Email</label>
                            </div>
                        </div>
                    </div>
                    <!-- Text input -->
                    <div class="form-outline mb-4">
                        <input type="text" id="CompanyName" name="CompanyName" class="form-control" />
                        <label class="form-label" for="CompanyName">Company name</label>
                    </div>

                    <!-- Text input -->
                    <div class="form-outline mb-4">
                        <input type="text" id="Address" name="Address" class="form-control" />
                        <label class="form-label" for="Address">Address</label>
                    </div>
                    <!-- Message input -->
                    <div class="form-outline mb-4">
                        <textarea class="form-control" id="Message" name="Message" rows="4"></textarea>
                        <label class="form-label" for="Message">Message</label>
                    </div>
                        @if(session('contactSuccessMsg'))
                            <div class="alert alert-success" role="alert">
                                {{ session('contactSuccessMsg') }}
                            </div>
                        @endif

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-block mb-4" style="background-color:#C9C9C9">Send Message</button>
                </form></div>
        </div>
    </div>
@endsection
