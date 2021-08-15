@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Companies</div>
                <div class="card-body">
                    <a class="btn btn-light mb-2" href="/companies/create" role="button">Add Company</a>
                    @if (session('status'))
                      <div class="alert alert-success">
                        {{ session('status') }}
                      </div>
                    @endif
                    <table class="table text-center">
                        <thead class="thead-light">
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Company Name</th>
                            <th scope="col">Company Email</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $no = $companies->firstItem(); ?>
                          @foreach ($companies as $company)
                          <tr>
                            <th>{{$no}}</th>
                            <td>{{$company->company_name}}</td>
                            <td>{{$company->company_email}}</td>
                            <td>
                              <a href="/companies/{{$company->company_id}}" class="badge badge-primary">Detail</a>
                            </td>
                          </tr>
                          <?php $no++; ?>
                          @endforeach
                        </tbody>
                    </table>
                    <div class="row">
                      <div class="col mt-2">
                        Showing {{$companies->firstItem()}} 
                        to {{$companies->lastItem()}} 
                        of {{$companies->total()}} entries
                      </div>
                      <div class="col">
                        <div class="d-flex justify-content-end">
                          {{$companies->links()}}
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
