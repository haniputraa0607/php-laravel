@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Employees</div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-8">
                      <h1 class="h4 mb-4 text-gray-800">Add Employee</h1>
                      <form action="/employees/{{$employee->employee_id}}" method="POST">
                        @method('patch')
                        @csrf
                        <div class="form-group row">
                          <label for="inputEmployeeName" class="col-sm-3 col-form-label">Employee Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control @error('employee_name') is-invalid @enderror" id="employee_name" name="employee_name" placeholder="Employee Name" value="{{old('employee_name')?old('employee_name') : $employee->employee_name}}">
                            @error('employee_name')
                              <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputEmployeeEmail" class="col-sm-3 col-form-label">Employee Email</label>
                          <div class="col-sm-9">
                            <input type="email" class="form-control @error('employee_email') is-invalid @enderror" id="employee_email" name="employee_email" placeholder="Employee Email" value="{{old('employee_email')?old('employee_email') : $employee->employee_email}}">
                            @error('employee_email')
                              <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputEmployeeCompany" class="col-sm-3 col-form-label">Company</label>
                          <div class="col-sm-9 ml-0">
                            <select class="custom-select mr-sm-2 @error('company_id') is-invalid @enderror" id="company_id" name="company_id">
                              <?php 
                                if(old('company_id')){
                                  echo'<option value="">Company Name</option>';
                                  foreach($companies as $company){
                                    if($company->company_id==old('company_id')){
                                      echo '
                                      <option value="'.$company->company_id.'" selected>'.$company->company_name.'</option>'
                                      ;
                                    }else{
                                      echo '
                                      <option value="'.$company->company_id.'">'.$company->company_name.'</option>'
                                      ;
                                    }
                                  }
                                }else{
                                  echo'<option value="" selected>Company Name</option>';
                                  foreach($companies as $company){
                                    if($company->company_id==$employee->company_id){
                                      echo '
                                      <option value="'.$company->company_id.'" selected>'.$company->company_name.'</option>'
                                      ;
                                    }else{
                                      echo '
                                      <option value="'.$company->company_id.'">'.$company->company_name.'</option>'
                                      ;
                                    }
                                  }
                                }
                              ?>
                            </select>
                            @error('company_id')
                              <div class="invalid-feedback">{{$message}}</div>
                            @enderror
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
