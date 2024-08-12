<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Camp;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentsController extends Controller
{
    public function index () {
        $departments =  Department::query()->get();
        return view("departments.index", [
            "departments" => $departments
        ]);
    }

    public function view(Department $department) {
        return view('departments.view', [
            'department' => $department
        ]);
    }

    public function create()
    {
        return view('departments.create');
    }

    public function store(Request $request ) 
    { 
        $name=$request->input("name");
        Department::query()->create([
            'name' => $name

        ]);
        return redirect(route('departments.index'));
    }
    
    public function update(Request $request, Department $department)
    {
        $name=$request->input("name");
        $department->update([
            'name' => $name
        ]);
        return redirect(route('departments.index'));
    }

    public function delete (Department $department)
    {
        $department->delete();
        return redirect (route('departments.index'));
    }
}
