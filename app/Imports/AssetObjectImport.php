<?php

namespace App\Imports;

use App\Models\Admin\Driver;
use App\Models\AssetObject;
use App\Models\Reading;
use App\Models\ReadingType;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class AssetObjectImport implements ToCollection, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */

    public function collection(Collection $rows)
    {

        foreach ($rows as $row) {
            if (!isset($row['machine_id']) || !isset($row['contract_transaction'])) {
                return "Object ID/Machine ID && Contract Transaction can't be empty";
            }
            if (isset($row['rider_assigned'])) {
                $rider = Driver::where('name', 'like', '%' . $row['rider_assigned'] . '%')->first();
                if ($rider == null) {
                    return "Rider provided is not registered within the system";
                }
            } {
                $rider = null;
            }

            $asset = AssetObject::updateOrCreate(
                ['object_id' => $row['machine_id']], // Note the correction here
                [
                    'contract_transaction' => isset($row['contract_transaction']) ? $row['contract_transaction'] : '-',
                    'customer' => isset($row['customer']) ? $row['customer'] : '-',
                    'invoice_type' => isset($row['meter_reading']) ? $row['meter_reading'] : '-',
                    'frequency' => isset($row['billing_period']) ? $row['billing_period'] : '-',
                    'object_type' => isset($row['object_type']) ? $row['object_type'] : '-',
                    'visiting_address' => isset($row['visiting_address']) ? $row['visiting_address'] : '-',
                    'contact_name' => isset($row['contact_name']) ? $row['contact_name'] : '-',
                    'phone' => isset($row['phone_no']) ? $row['phone_no'] : '-',
                    'email' => isset($row['email']) ? $row['email'] : '-',
                    'emirates' => isset($row['emirates']) ? $row['emirates'] : '-',
                    'remarks' => isset($row['remarks_by_awds']) ? $row['remarks_by_awds'] : '-',
                    'last_visit_date' => isset($row['visit_date']) ? $row['visit_date'] : '-',
                    'rider_id' => $rider ? $rider->id : $rider,
                    'batch' => isset($row['batch_no']) ? $row['batch_no'] : '-'
                ]
            );

            foreach ($this->readingTypes() as $key => $type) {
                $type = function_exists('convertToUnderscoreFormat') ? convertToUnderscoreFormat($type) : $type;
                if (isset($row[$type])) {
                    Reading::create([
                        'object_id' => $asset->id,
                        'reading_type_id' => $key,
                        'reading_value' => $row[$type] ?? '-',
                        'visit_date' => isset($row['visit_date']) ? $row['visit_date'] : (isset($row['submited_date']) ? $row['submited_date'] : ''),
                        'remarks' => isset($row['remarks']) ? $row['remarks'] : ''
                    ]);
                }
            }
        }
    }

    public function readingTypes()
    {
        $readingTypes = ReadingType::pluck('name', 'id');

        return $readingTypes;
    }
}
