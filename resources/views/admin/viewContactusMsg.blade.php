
@extends('layouts.mainAdmin')
@section('content')

    <div class="container" style="height:650px" >
        <h1 class="display-6 d-flex justify-right-center">Conact us Message</h1>
    <table class="table">
        <thead class="table-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Mobile Number</th>
            <th scope="col">Email</th>
            <th scope="col">Company Name</th>
            <th scope="col">Address</th>
            <th scope="col">Message</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($contactData as $contactTable)
            <tr>
                <th scope="row">{{$contactTable->id}}</th>
                <td>{{ $contactTable->FirstName }}</td>
                <td>{{ $contactTable->LastName }}</td>
                <td>{{ $contactTable->MobileNo }}</td>
                <td>{{ $contactTable->Email }}</td>
                <td>{{ $contactTable->CompanyName }}</td>
                <td>{{ $contactTable->Address }}</td>
                <td>{{ $contactTable->Message }}</td>
                <td>
                    <form method="POST" id="delete-form-{{ $contactTable->id }}" action="{{ route('deleteContactus',$contactTable->id) }}" style="display: none">
                        {{ csrf_field() }}
                        {{ method_field('delete') }}
                    </form>
                    <button onclick="if(confirm('Are you sure to delete this record?')){
                            event.preventDefault();
                            document.getElementById('delete-form-{{ $contactTable->id }}').submit();
                    }else{
                            event.preventDefault();
                    }">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                    </button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
        <div class="w-25">
            {{ $contactData->links() }}
        </div>
        <div>
        @if(session('contactSuccessMsg'))
            <div class="alert alert-success" role="alert">
                {{ session('contactSuccessMsg') }}
            </div>
        @endif
        </div>
    </div>
@endsection
