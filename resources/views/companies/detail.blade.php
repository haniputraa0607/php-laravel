@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Companies</div>
                <div class="card-body">
                      <h1 class="h4 mb-3 text-gray-800">Company Detail</h1>
                      @if (session('status'))
                        <div class="alert alert-success">
                          {{ session('status') }}
                        </div>
                      @endif
                      <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                          <div class="col-md-4 my-auto">
                            <img src="{{ asset('storage/'.$company->company_logo.'') }}" class="card-img">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title mb-3">{{$company->company_name}}</h5>
                              <p class="card-text mb-2"><b>Email : </b>{{$company->company_email}}</p>
                              <p class="card-text mb-2"><small class="text-muted"><b>Penerbit : </b>{{$company->company_website}}</small></p>
                              <a href="/companies/{{$company->company_id}}/edit" class="btn btn-primary">Edit</a>
                              <form action="{{$company->company_id}}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                              </form>
                              <a href="/companies" class="btn btn-success">Back to All Companies</a>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
