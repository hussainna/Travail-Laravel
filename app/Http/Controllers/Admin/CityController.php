<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;
use Illuminate\Support\Facades\File;




class CityController extends Controller
{
    public function index()
    {
        $city=City::all();
        return view('admin.city.city',compact('city'));
    }
    public function add()
    {
        return view('admin.city.add');
    }
    public function insert(Request $request)
    {
        $roles=[
            'name'=>'required|max:191',
            'place'=>'required|max:191',
            'description'=>'required|max:191',
            'img'=>'required',
        ];
        $message=[
            'name.required'=>'the name required',
            'place.required'=>'the place required',
            'description.required'=>'the description required',
            'img.required'=>'the img required',
            
        ];
        $validator=Validator::make($request->all(),$roles,$message);
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }
        else
        {
            $city=new City();
            $city->name=$request->name;
            $city->description=$request->description;
            $city->place=$request->place;
            if($request->hasFile('img'))
            {
                $file=$request->file('img');
                $ext=$file->getClientOriginalExtension();
                $fileName=time().'.'.$ext;
                $file->move('uploads/cityImage/',$fileName);
                $city->img=$fileName;
            }
            $city->save();
            return redirect('/dashboard/city');

        }
    }
    public function delete($id)
    {
        $city=City::find($id);
        $city->delete();
        return redirect('dashboard/city');
    }

    public function edit($id)
    {
        $city=City::find($id);
        return view('admin.city.edit',compact('city'));
    }
    public function update(Request $request,$id)
    {
        $roles=[
            'name'=>'required|max:191',
            'place'=>'required|max:191',
            'description'=>'required|max:191',
            'img'=>'required',
        ];
        $message=[
            'name.required'=>'the name required',
            'place.required'=>'the place required',
            'description.required'=>'the description required',
            'img.required'=>'the img required',
            
        ];
        $validator=Validator::make($request->all(),$roles,$message);
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }
        else
        {
            $city=City::find($id);
            $city->name=$request->name;
            $city->description=$request->description;
            $city->place=$request->place;
            if($request->hasFile('img'))
            if(File::exists('img'))
                {
                    File::delete('img');
                }
            {
                $file=$request->file('img');
                $ext=$file->getClientOriginalExtension();
                $fileName=time().'.'.$ext;
                $file->move('uploads/cityImage/',$fileName);
                $city->img=$fileName;
            }
            $city->update();
            return redirect('/dashboard/city');

        }
    }

}
