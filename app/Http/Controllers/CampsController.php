<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Camp;
use Illuminate\Http\Request;

class CampsController extends Controller
{
    public function index () {
        $camps =  Camp::query()->get();
        return view("camps.index", [
            "nume" => "emilia",
            "cald" => true,
            "mancaruri" => ["pizza", "paste", "burger","thai"],
            "camps" => $camps
        ]);
    }

    public function view(Camp $camp) {
        return view('camps.view', [
            'camp' => $camp
        ]);
    }

    public function create()
    {
        return view('camps.create');
    }

    public function store(Request $request ) 
    { 
        $name=$request->input("name");
        $start_date=$request->input("start_date");
        $end_date=$request->input("end_date");
        $max_members=$request->input("max_members");
        $equipment=$request->input("equipment");
        $type=$request->input("type");
        Camp::query()->create([
            'name' => $name,
            'start_date' => $start_date,
            'end_date' => $end_date,
            'max_members' => $max_members,
            'equipment' => $equipment,
            'type' => $type

        ]);
        return redirect(route('camps.index'));
    }
    
    public function update(Request $request, Camp $camp)
    {
        $name=$request->input("name");
        $start_date=$request->input("start_date");
        $end_date=$request->input("end_date");
        $max_members=$request->input("max_members");
        $equipment=$request->input("equipment");
        $type=$request->input("type");
        $camp->update([
            'name' => $name,
            'start_date' => $start_date,
            'end_date' => $end_date,
            'max_members' => $max_members,
            'equipment' => $equipment,
            'type' => $type
        ]);
        return redirect(route('camps.index'));
    }

    public function delete (Camp $camp)
    {
        $camp->delete();
        return redirect (route('camps.index'));
    }

    public function enroll () {
        return view('camps.enroll');
    }

    public function participant () {
        return view('camps.participant');
    }
    public function voluntar () {
        return view('camps.voluntar');
    }
    public function echipament () {
        return view('camps.echipament');
    }
}
