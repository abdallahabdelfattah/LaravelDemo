<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Website;
use Illuminate\Http\Request;

class WebsitesCompanyContoller extends Controller
{

     
    public function getWebSites($company_id)
    {
        $company=  Company::find($company_id); 
        $websites=[]; 
        if($company)
        {
            $websites= $company->websites; 
        }
        return view('company.websites',compact('websites',"company_id","company"));
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'title' => 'required',
            'link' => 'required|url',
        ]);

        Website::create($request->all());
       return redirect()->back()->with('success','Website  created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Website  $website
     * @return \Illuminate\Http\Response
     */
    public function show(Website $website)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Website  $website
     * @return \Illuminate\Http\Response
     */
    public function edit(Website $website)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Website  $website
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Website $website)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Website  $website
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Website::destroy($id); 
        return redirect()->back()->with('success','Website deleted successfully.');
      
    }

   


}
