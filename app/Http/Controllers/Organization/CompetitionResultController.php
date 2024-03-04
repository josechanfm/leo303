<?php

namespace App\Http\Controllers\Organization;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Config;
use App\Models\Competition;
use App\Models\CompetitionApplication;

class CompetitionResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Competition $competition)
    {
        $competition->applications;
        $competition->score;
        //$competitionResults=Config::item('competition_results');
        // dd($competitionResults);
        //dd($competition);
        return Inertia::render('Organization/CompetitionResults',[
            'competitionResults'=>Config::item('competition_results'),
            'competition'=>$competition
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
    public function store(Request $request, Competition $competition)
    {
        $cgw=$request->cgw;
        $results=$request->results;
        // dd($request->all());
        CompetitionApplication::where('category',$cgw[0])
        ->where('gender',$cgw[1])
        ->where('weight',$cgw[2])
        ->update([
            'result_rank'=>null,
            'result_score'=>null
        ]);
        $scores=$competition->score->toArray();
        foreach($results as $result){
            if(isset($result['application_id'])){
                if(is_array($result['application_id'])){
                    CompetitionApplication::whereIn('id',$result['application_id'])->update([
                        'result_rank'=>$result['value'],
                        'result_score'=>$scores[$result['value']]
                    ]);
                }else{
                    CompetitionApplication::where('id',$result['application_id'])->update([
                        'result_rank'=>$result['value'],
                        'result_score'=>$scores[$result['value']]
                    ]);
                }
            }
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
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
}
