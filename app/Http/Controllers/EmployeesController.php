<?php

namespace App\Http\Controllers;

use App\Models\{Employee, Company};
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::join('companies', 'employees.company_id', '=', 'companies.company_id')
               ->paginate(5,['employees.*', 'companies.company_name']);
        return view('employees.index', compact("employees"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = Company::all();
        return view('employees.create', compact("companies"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "employee_name" => "required",
            "employee_email" => "required",
            "company_id" => "required",
        ]);
        Employee::create($request->all());
        return redirect("/employees")->with(
            "status",
            "A New Employee has been added"
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        $companies = Company::all();
        return view('employees.edit', ["employee" => $employee,"companies"=>$companies]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            "employee_name" => "required",
            "employee_email" => "required",
            "company_id" => "required",
        ]);
        Employee::where("employee_id", $employee->employee_id)->update([
            "employee_name" => $request->employee_name,
            "employee_email" => $request->employee_email,
            "company_id" => $request->company_id,
        ]);
        return redirect("employees")->with(
            "status",
            "An Employee has been changed"
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        Employee::destroy($employee->employee_id);
        return redirect("/employees")->with(
            "status",
            "$employee->employee_name has been deleted"
        ); 
    }
}
