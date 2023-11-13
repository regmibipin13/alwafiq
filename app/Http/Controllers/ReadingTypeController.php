<?php

// app/Http/Controllers/ReadingTypeController.php

namespace App\Http\Controllers;

use App\Models\ReadingType;
use Illuminate\Http\Request;

class ReadingTypeController extends Controller
{
    public function index()
    {
        $readingTypes = ReadingType::all();
        return view('reading_types.index', compact('readingTypes'));
    }

    public function create()
    {
        return view('reading_types.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:reading_types',
        ]);

        ReadingType::create($validatedData);

        return redirect()->route('objects.index')->with('success', 'Reading type created successfully');
    }
    public function edit($id)
    {
        $readingType = ReadingType::findOrFail($id);
        return view('reading_types.edit', compact('readingType'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:reading_types,name,' . $id,
        ]);

        $readingType = ReadingType::findOrFail($id);
        $readingType->update($validatedData);

        return redirect()->route('objects.index')->with('success', 'Reading type updated successfully');
    }
    public function destroy($id)
    {
        $readingType = ReadingType::findOrFail($id);
        $readingType->delete();

        return redirect()->route('objects.index')->with('success', 'Reading type deleted successfully');
    }
}