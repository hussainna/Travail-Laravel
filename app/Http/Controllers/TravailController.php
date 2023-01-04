<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Travail;
use Illuminate\Support\Facades\Validator;





class TravailController extends Controller
{
    public function travail()
    {
        return view('website.travail');
    }
    public function insertTravail(Request $request)
    {
        $rules=[
            'name'=>'required|max:191',
            'from_city'=>'required|max:191',
            'to_city'=>'required|max:191',
            'from_date'=>'required',
            'description'=>'required',
            'phone'=>'numeric',
            'email'=>'required|email:rfc,dns',
            
        ];
        $message=[
            'name.required'=>'the name required',
            'description.required'=>'the description required',
            'email.required'=>'the email required',
            'to_city.required'=>'the to city required',
            'from_city.required'=>'the from city required',
            'from_date.required'=>'the from date required',
            'email.email'=>'you must write email',
            'phone.numeric'=>'phone must be numbers'
        ];

        $validator=Validator::make($request->all(),$rules,$message);
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }
        else
        {
            $travail=new Travail();
            $travail->name=$request->name;
            $travail->from_city=$request->from_city;
            $travail->to_city=$request->to_city;
            $travail->from_date=$request->from_date;
            $travail->email=$request->email;
            $travail->phone=$request->phone;
            $travail->facebook=$request->facebook;
            $travail->instagram=$request->instagram;
            $travail->snap=$request->snap;
            $travail->description=$request->description;
            $travail->save();
            return redirect('posts');
        }
    }
    public function posts()
    {
        $travail=Travail::all();
        return view('website.post',compact('travail'));
    }

    public function sender()
    {
        return view('website.sender');
    }

    public function search()
    {
        $from_city=$_GET['from_city'];
        $to_city=$_GET['to_city'];
        $from_date=$_GET['from_date'];
        $travail=Travail::where('from_city','LIKE','%'.$from_city.'%')->where('to_city','LIKE','%'.$to_city.'%')->where('from_date','LIKE','%'.$from_date.'%')->get();
        return view('website.search',compact('travail'));
    }
}
