<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompaniesController extends Controller
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
        $companies = Company::paginate(5);
        return view('companies.index', compact("companies"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companies.create');
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
            "company_name" => "required",
            "company_email" => "required",
            "company_website" => "required",
            "company_logo" => "required|mimes:png|max:2048|dimensions:min_width=100,min_height=100"
        ]);
        $logo_asli = $request->file('company_logo')->getClientOriginalName();
        $filename = pathinfo($logo_asli, PATHINFO_FILENAME);
        $extension = $request->file('company_logo')->getClientOriginalExtension();
        $company_logo = $filename.'_'.time().'.'.$extension;
        $request->file('company_logo')->storeAs('company',$company_logo);
        Company::create([
            "company_name" => $request->company_name,
            "company_email" => $request->company_email,
            "company_website" => $request->company_website,
            "company_logo" => $company_logo
        ]);
        return redirect("/companies")->with(
            "status",
            "A New Company has been added"
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        return view("companies.detail", compact("company"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        unlink(storage_path('app/company/'.$company->company_logo));
        Company::destroy($company->company_id);
        return redirect("/companies")->with(
            "status",
            "$company->company_name has been deleted"
        ); 
    }
}
