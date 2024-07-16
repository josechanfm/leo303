<?php

namespace App\Http\Controllers\Widget;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Poll;
use App\Models\PollResponse;

class PollController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Widget/Polls',[
            'polls'=>Poll::where('user_id',auth()->user()->id)->get(),
            'configs'=>'widget configs'
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
        $data=$request->all();
        Poll::create($data);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Poll $poll)
    {
        $poll->responses;
        return Inertia::render('Widget/PollResult',[
            'poll'=>$poll
        ]);
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
    public function update(Request $request, Poll $poll)
    {
        $poll->update($request->all());
        return redirect()->back();
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
    public function polling(Request $request){
        $this->validate($request,[
            'uuid'=>'required',
        ]);

        return Inertia::render('Widget/Polling',[
           'poll'=>Poll::where('uuid',$request->uuid)->first()
        ]);
    }
    public function vote(Request $request){
        $this->validate($request,[
            'poll_id'=>'required',
            'username'=>'required',
            'answer'=>'required',
        ]);
        //$data=$request->all();
        //$data['ip_address']=$request->ip();
        PollResponse::updateOrCreate(
            ['poll_id'=>$request->poll_id,'ip_address'=>$request->ip(),'username'=>$request->username],
            ['answer'=>$request->answer]
        );
        //PollResponse::create($data);
        return response()->json($request->all());
    }
    public function responseClear(Poll $poll){
        $deleted=PollResponse::whereBelongsTo($poll)->delete();
        return response()->json(['message'=>'All responses for the poll are deleted!']);
        //return redirect()->back()->with(['clear'=>'all responses for the poll are deleted!']);
        //return response()->json();
    }
    public function responseAll(Poll $poll){
        return response()->json($poll->responses);
    }
}
