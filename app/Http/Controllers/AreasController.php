<?php

// app/Http/Controllers/AreasController.php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreasController extends Controller
{
    public function index()
    {
        $areas = Area::all();
        return view('areas.index', compact('areas'));
    }

    public function create()
    {
        return view('areas.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:areas',
        ]);

        Area::create($validatedData);

        return redirect()->route('objects.index')->with('success', 'Area created successfully');
    }

    public function edit($id)
    {
        $area = Area::findOrFail($id);
        return view('areas.edit', compact('area'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:areas,name,' . $id,
        ]);

        $area = Area::findOrFail($id);
        $area->update($validatedData);

        return redirect()->route('objects.index')->with('success', 'Area updated successfully');
    }

    public function destroy($id)
    {
        $area = Area::findOrFail($id);
        $area->delete();

        return redirect()->route('objects.index')->with('success', 'Area deleted successfully');
    }
}
