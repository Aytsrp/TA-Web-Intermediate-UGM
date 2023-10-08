<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class GarageController extends Controller
{
    public function homepage()
    {
        $cars = Cars::all();
        return view('mygarage.homepage', compact(['cars']));
    }
    public function dashboard()
    {
        $cars = Cars::all();
        return view('mygarage.dashboard', compact(['cars']));
    }
    public function add()
    {
        return view('mygarage.add');
    }
    public function store(Request $request)
    {
        $cars = new Cars;
        $cars->brand = $request->input('brand');
        $cars->model = $request->input('model');
        $cars->year = $request->input('year');
        $cars->generation = $request->input('generation');
        $cars->engine = $request->input('engine');
        $cars->transmission = $request->input('transmission');
        $cars->bodytype = $request->input('bodytype');
        $cars->fueltype = $request->input('fueltype');
        $cars->drivewheel = $request->input('drivewheel');
        if ($request->hasfile('images')) {
            $file = $request->file('images');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('images/uploads/', $filename);
            $cars->images = $filename;
        }
        $cars->save();
        return redirect()->back();
    }
    public function edit($id)
    {
        $cars = Cars::find($id);
        return view('mygarage.edit', compact(['cars']));
    }
    public function update(Request $request, $id)
    {
        $cars = Cars::find($id);
        $cars->brand = $request->input('brand');
        $cars->model = $request->input('model');
        $cars->year = $request->input('year');
        $cars->generation = $request->input('generation');
        $cars->engine = $request->input('engine');
        $cars->transmission = $request->input('transmission');
        $cars->bodytype = $request->input('bodytype');
        $cars->fueltype = $request->input('fueltype');
        if ($request->hasFile('images')) {
            $destination = 'images/uploads/' . $cars->images;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file("images");
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('images/uploads/', $filename);
            $cars->images = $filename;
        }
        $cars->update();
        return redirect('/dashboard');
    }
    public function destroy($id)
    {
        $cars = Cars::find($id);
        $cars->delete();
        return redirect('/dashboard');
    }
}
