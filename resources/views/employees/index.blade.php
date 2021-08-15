@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Employees</div>
                <div class="card-body">
                    <a class="btn btn-light mb-2" href="/employees/create" role="button">Add Employee</a>
                    @if (session('status'))
                      <div class="alert alert-success">
                        {{ session('status') }}
                      </div>
                    @endif
                    <table class="table text-center">
                        <thead class="thead-light">
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Employee Name</th>
                            <th scope="col">Employee Email</th>
                            <th scope="col">Employee Company</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $no = $employees->firstItem(); ?>
                          @foreach ($employees as $employee)
                          <tr>
                            <th>{{$no}}</th>
                            <td>{{$employee->employee_name}}</td>
                            <td>{{$employee->employee_email}}</td>
                            <td>{{$employee->company_name}}</td>
                            <td>
                              <a href="/employees/{{$employee->employee_id}}/edit" class="badge badge-primary">Edit</a>
                              <form action="/employees/{{$employee->employee_id}}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="button_a badge badge-danger">Delete</button>
                              </form>
                            </td>
                          </tr>
                          <?php $no++; ?>
                          @endforeach
                        </tbody>
                    </table>
                    <div class="row">
                      <div class="col mt-2">
                        Showing {{$employees->firstItem()}} 
                        to {{$employees->lastItem()}} 
                        of {{$employees->total()}} entries
                      </div>
                      <div class="col">
                        <div class="d-flex justify-content-end">
                          {{$employees->links()}}
                        </div>
                      </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
