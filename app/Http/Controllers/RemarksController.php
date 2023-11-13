<?php

// app/Http/Controllers/RemarksController.php

namespace App\Http\Controllers;

use App\Models\Remark;
use Illuminate\Http\Request;

class RemarksController extends Controller
{
    public function index()
    {
        $remarks = Remark::all();
        return view('remarks.index', compact('remarks'));
    }

    public function create()
    {
        return view('remarks.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:remarks',
            // Add any other validation rules for the 'Remark' model fields
        ]);

        Remark::create($validatedData);

        return redirect()->route('objects.index')->with('success', 'Remark created successfully');
    }

    public function edit($id)
    {
        $remark = Remark::findOrFail($id);
        return view('remarks.edit', compact('remark'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:remarks,name,' . $id,
            // Add any other validation rules for the 'Remark' model fields
        ]);

        $remark = Remark::findOrFail($id);
        $remark->update($validatedData);

        return redirect()->route('objects.index')->with('success', 'Remark updated successfully');
    }

    public function destroy($id)
    {
        $remark = Remark::findOrFail($id);
        $remark->delete();

        return redirect()->route('objects.index')->with('success', 'Remark deleted successfully');
    }
}
