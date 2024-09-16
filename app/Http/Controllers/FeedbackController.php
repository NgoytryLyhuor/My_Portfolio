<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    //
    public function index(Request $request){
        Feedback::insert([
            'name' => $request->name,
            'email' => $request->email,
            'comment' => $request->comment
        ]);
        return redirect()->back();
    }

    public function massage(){
            $allData = Feedback::all();

        return view("feedback",compact("allData"));
    }
}
