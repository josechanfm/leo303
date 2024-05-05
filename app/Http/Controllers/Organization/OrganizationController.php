<?php

namespace App\Http\Controllers\Organization;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdminUser;
use App\Models\Organization;
use Inertia\Inertia;

class OrganizationController extends Controller
{
    
    public function __construct()
    {
        $this->authorizeResource(Organization::class);
    }

    public function switch(Organization $organization){
        session(['organization'=>$organization]);
        return to_route('manage');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $organizations=auth()->user()->organizations;
        if(empty($organizations)){
            return to_route('/');
        }
        if($organizations->count() == 1){
            return to_route('manage.organizations.edit',$organizations[0]->id);
        }
        return Inertia::render('Organization/Organizations',[
            'organizations' => $organizations
        ]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Organization $organization)
    {
        // \App::setLocale('en');
        return Inertia::render('Organization/OrganizationEdit',[
            'organization'=>$organization
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Organization $organization)
    {         

        //$this->authorize('update' , $organization);


        return Inertia::render('Organization/OrganizationEdit',[
            'organization'=>$organization,
        ]);
        
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Organization $organization, Request $request)
    {
        $data=$request->all();
        if($request->file('logo_upload')){
            $file=$request->file('logo_upload');
            $fileName=$organization->id.'_'.$file->getClientOriginalName();
            $file->move(public_path('logos'), $fileName);
            $data['logo']='/logos/'.$fileName;
        }
        $organization->update($data);

        return to_route('manage.organizations.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function deleteLogo(Organization $organization){
        unlink(public_path($organization->logo));
        $organization->logo=null;
        $organization->save();
        return redirect()->back();
    }


}
