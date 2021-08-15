@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Companies</div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-8">
                      <h1 class="h4 mb-4 text-gray-800">Edit Company</h1>
                      <form method="post" action="/companies/{{$company->company_id}}" enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <div class="form-group row">
                          <label for="inputCompanyName" class="col-sm-3 col-form-label">Company Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control @error('company_name') is-invalid @enderror" id="company_name" name="company_name" placeholder="Company Name" value="{{old('company_name')?old('company_name') : $company->company_name}}">
                            @error('company_name')
                              <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputCompanyEmail" class="col-sm-3 col-form-label">Company Email</label>
                          <div class="col-sm-9">
                            <input type="email" class="form-control @error('company_email') is-invalid @enderror" id="company_email" name="company_email" placeholder="Company Email" value="{{old('company_email')?old('company_email') : $company->company_email}}">
                            @error('company_email')
                              <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputCompanyWeb" class="col-sm-3 col-form-label">Company Website</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control @error('company_website') is-invalid @enderror" id="company_website" name="company_website" placeholder="Company Website" value="{{old('company_website')?old('company_website') : $company->company_website}}">
                            @error('company_website')
                              <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputCompanyLogo" class="col-sm-3 col-form-label">Company Logo</label>
                          <div class="col-sm-2">
                            <img src="{{ asset('storage/'.$company->company_logo.'') }}" alt="" class="img-thumbnail img-preview">
                          </div>
                          <div class="col-sm-7">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input @error('company_logo') is-invalid @enderror" id="company_logo" name="company_logo" onchange="preview()">
                              @error('company_logo')
                                <div class="invalid-feedback">{{$message}}</div>
                              @enderror
                              <label class="custom-file-label" for="sampul">{{$company->company_logo}}</label>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
