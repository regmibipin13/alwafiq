<?php

namespace App\Exports;

use App\Models\AssetObject;
use App\Models\ReadingType;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class AssetObjectExport implements FromView
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function view(): View
    {
        $objects = AssetObject::with(['rider'])->paginate(30);
        $objectsHeaders = collect(ReadingType::all())->map->name->toArray();
        return view('objects.excel_view', ['objects' => $objects, 'types' => $objectsHeaders]);
    }
}
