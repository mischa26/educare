<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Division;
use App\Districts;
use Session;
use DB;



class AdminController extends Controller
{
    //list of Divisions
    public function listDivision()
    {
        $divisions = Division::all();
        return view('adminpanel', compact($divisions));
    }

    //download division csv
    public function handleImportDivision(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'file' => 'required',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }

        $file = $request->file('file');
        $csvData = file_get_contents($file);
        $rows = array_map('str_getcsv', explode("\n", $csvData));
        $header = array_shift($rows);
        
        foreach($rows as $row)
        {
            $row = array_combine($header, $row);

            Division::create([
                'divisionname' => $row['divisionname'],
            ]);
        }
            Session::flash('message','Divisions are imported');
            return redirect()->back();
    }

    //list of district
    public function listDistrict()
    {
        return view('adminpanel');
    }

    //download district csv
    public function handleImportDistrict(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'file' => 'required',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }

        $file = $request->file('file');
        $csvData = file_get_contents($file);
        $rows = array_map('str_getcsv', explode("\n", $csvData));
        $header = array_shift($rows);
        
        foreach($rows as $row)
        {
            $row = array_combine($header, $row);

            Districts::create([
                'distid' => $row['distid'],
                'distname' => $row['distname'],
                'div_id' => $row['div_id'],
            ]);
        }
            Session::flash('message','Districts are imported');
            return redirect()->back();
    }
}
