<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\feedback;


class feedbackcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedbackform=feedback::all();
        return view ('viewfeedback',compact('feedbackform'));
    }


    public function search(Request $request)
    {
        $getfname=request('fename');
        $feedbackform=feedback::query()
        ->where('Name','LIKE',"%{$getfname}%")
        ->get();
        return view('viewfeedback',compact('feedbackform'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $getfname=request('fname');
        $getfemail=request('femail');
        $getfcontactno=request('fcontactno');
        $getffeed=request('ffeedback');
/*
        echo "<br>";
        echo "$getfname";
        echo "<br>";
        echo "$getfemail";
        echo "<br>";
        echo "$getfcontactno";
        echo "<br>";
        echo "$getffeed";
        echo "<br>";
*/
$feedbackform=new feedback;

$feedbackform->Name= $getfname;
$feedbackform->Email=$getfemail;
$feedbackform->ContactNo=$getfcontactno;
$feedbackform->FeedBack=$getffeed;


$feedbackform->save();


return redirect('contact');

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
        //
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
