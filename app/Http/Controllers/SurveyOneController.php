<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\SurveyOne;

class SurveyOneController extends Controller
{
    //
    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
   public function surveyOne()
   {
       return view('surveyOne');
   }
   /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
   public function surveyOnePost(Request $request)
   {
       $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required'
        ]);
       SurveyOne::create($request->all());
       return back()->with('success', 'Thanks for submitting survey!');
   }
}
