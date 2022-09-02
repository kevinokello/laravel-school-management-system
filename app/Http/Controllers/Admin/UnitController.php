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
        $unit = Unit::all();
        return view('dashboard.inventory.unit.index', compact('unit'));
    }
    public function store(UnitFormRequest $request)
    {
        $data = $request->validated();
        $unit = new Unit;
        $unit->name = $data['name'];
        $unit->created_by = Auth::user()->id;
        $unit->save();
        session()->flash('success', 'Unit created succesfully');
        return redirect()->back();
    }
    public function destroy($unit_id)
    {
        $unit = Unit::find($unit_id);
        if ($unit) {
            $unit->delete();
            session()->flash('success', 'unit deleted succesfully');
            return redirect()->back();
        } else {
            session()->flash('danger', 'no unit id found');
            return redirect()->back();
        }
    }
}
