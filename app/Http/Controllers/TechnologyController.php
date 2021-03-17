<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TechnologyTable;

class TechnologyController extends Controller
{
    public function index()
    {
        $technologyTables = TechnologyTable::all();
        return view('welcome',compact('technologyTables'));
    }   

    public function insertTech()
    {

        return view('admin.insertTechnology');
    }

    public function storeTech(Request $request){
        $this->validate($request,[
                'TechTitle' =>'required',
                'TechDesc' =>'required',
                'techImage_url' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        //to customise the image name according to date
        $imageName = time().'.'.$request->techImage_url->extension();

        $request->techImage_url->move(public_path('/demo/img/technology_table_img'), $imageName);

        $technologyTable = new TechnologyTable;
        $technologyTable->TechHeading = $request->TechTitle;
        $technologyTable->TechDesc =  $request->TechDesc;
        $technologyTable->techImage_url =  $imageName;
        $technologyTable->save();

        return redirect(route('insertTechnology'))->with('successMsg','Data Successfully Added');
    }

}
