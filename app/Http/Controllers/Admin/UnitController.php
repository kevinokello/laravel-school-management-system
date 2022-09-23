<?php

namespace App\Http\Controllers\Admin;

use App\Models\Unit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\UnitFormRequest;

class UnitController extends Controller
{
    public function index()
    {
        $unit = Unit::where('school_id', session('school_id'))->get();
        return view('dashboard.inventory.unit.index', compact('unit'));
    }
    public function store(UnitFormRequest $request)
    {
        $data = $request->validated();
        $unit = new Unit;
        $unit->name = $data['name'];
        $unit->created_by = Auth::user()->id;
        $unit->school_id = $request->session()->get('school_id');
        $unit->save();
        session()->flash('success', 'Inventory Unit created succesfully');
        return redirect()->back();
    }
    public function destroy($unit_id)
    {
        $unit = Unit::find($unit_id);
        if ($unit) {
            $unit->delete();
            session()->flash('success', 'Inventory unit deleted succesfully');
            return redirect()->back();
        } else {
            session()->flash('danger', 'no inventory unit id found');
            return redirect()->back();
        }
    }
}
