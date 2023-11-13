<?php

// app/Http/Controllers/InvoiceTypesController.php

namespace App\Http\Controllers;

use App\Models\InvoiceType;
use Illuminate\Http\Request;

class InvoiceTypesController extends Controller
{
    public function index()
    {
        $invoiceTypes = InvoiceType::all();
        return view('invoice_types.index', compact('invoiceTypes'));
    }

    public function create()
    {
        return view('invoice_types.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:invoice_types',
        ]);

        InvoiceType::create($validatedData);

        return redirect()->route('objects.index')->with('success', 'Invoice type created successfully');
    }

    public function edit($id)
    {
        $invoiceType = InvoiceType::findOrFail($id);
        return view('invoice_types.edit', compact('invoiceType'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:invoice_types,name,' . $id,
        ]);

        $invoiceType = InvoiceType::findOrFail($id);
        $invoiceType->update($validatedData);

        return redirect()->route('objects.index')->with('success', 'Invoice type updated successfully');
    }

    public function destroy($id)
    {
        $invoiceType = InvoiceType::findOrFail($id);
        $invoiceType->delete();

        return redirect()->route('objects.index')->with('success', 'Invoice type deleted successfully');
    }
}
