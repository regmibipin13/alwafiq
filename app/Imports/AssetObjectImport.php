<?php

namespace App\Imports;

use App\Models\Admin\Driver;
use App\Models\AssetObject;
use App\Models\Reading;
use App\Models\ReadingType;
use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class AssetObjectImport implements ToCollection, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */

    public function collection(Collection $rows)
    {
        $this->validateExcel($rows);
        foreach ($rows as $row) {
            if (!isset($row['machine_id']) || !isset($row['contract_transaction'])) {
                return "Object ID/Machine ID && Contract Transaction can't be empty";
            }
            if (isset($row['rider_assigned'])) {
                $rider = Driver::where('name', 'like', '%' . $row['rider_assigned'] . '%')->first();
            } else {
                $rider = null;
            }

            $asset = AssetObject::updateOrCreate(
                ['object_id' => $row['machine_id']], // Note the correction here
                [
                    'contract_transaction' => isset($row['contract_transaction']) ? $row['contract_transaction'] : 0,
                    'customer' => isset($row['customer']) ? $row['customer'] : 0,
                    'invoice_type' => isset($row['meter_reading']) ? $row['meter_reading'] : 0,
                    'frequency' => isset($row['billing_period']) ? $row['billing_period'] : 0,
                    'object_type' => isset($row['object_type']) ? $row['object_type'] : 0,
                    'visiting_address' => isset($row['visiting_address']) ? $row['visiting_address'] : 0,
                    'contact_name' => isset($row['contact_name']) ? $row['contact_name'] : 0,
                    'phone' => isset($row['phone_no']) ? $row['phone_no'] : 0,
                    'email' => isset($row['email']) ? $row['email'] : 0,
                    'emirates' => isset($row['emirates']) ? $row['emirates'] : 0,
                    'remarks' => isset($row['remarks_by_awds']) ? $row['remarks_by_awds'] : 0,
                    'last_visit_date' => isset($row['visit_date']) ? Carbon::parse($row['visit_date']) : null,
                    'rider_id' => $rider ? $rider->id : $rider,
                    'batch' => isset($row['batch_no']) ? $row['batch_no'] : 0,
                    'google_address' => isset($row['google_address']) ? $row['google_address'] : 0
                ]
            );
            foreach ($this->readingTypes() as $key => $type) {
                $type = function_exists('convertToUnderscoreFormat') ? convertToUnderscoreFormat($type) : $type;
                if (isset($row[$type])) {
                    Reading::create([
                        'object_id' => $asset->id,
                        'reading_type_id' => $key,
                        'reading_value' => $row[$type] ?? 0,
                        'visit_date' => Carbon::now(),
                        'remarks' => isset($row['remarks']) ? $row['remarks'] : ''
                    ]);
                }
            }

            Task::updateOrCreate(
                ['object_id' => $asset->id, 'date' => $asset->last_visit_date],
                ['date' => $asset->last_visit_date]
            );
        }
    }

    public function readingTypes()
    {
        $readingTypes = ReadingType::pluck('name', 'id');
        return $readingTypes;
    }

    public function validateExcel($rows)
    {
        // dd(Date::excelToDateTimeObject($rows->first()['visit_date']));
        $keys = [
            // 'contract_transaction',
            'customer',
            // 'meter_reading',
            // 'billing_period',
            // 'object_type',
            // 'visiting_address',
            // 'contact_name',
            // 'phone_no',
            // 'email',
            // 'emirates',
            // 'remarks_by_awds',
            // 'visit_date',
            'rider_assigned',
            // 'google_address',
        ];

        // Check if all required keys are present in the first row of $rows
        $missingKeys = array_diff($keys, array_keys($rows->first()->toArray()));

        if (!empty($missingKeys)) {
            $validation = [];
            foreach ($missingKeys as $value) {
                $validation[$value] = [convertToSpaceFormat($value) . " is missing"];
            }
            throw ValidationException::withMessages($validation);
        }

        foreach ($rows as $row) {
            if (is_int($row['visit_date']) || is_float($row['visit_date'])) {
                $row['visit_date'] = Date::excelToDateTimeObject($row['visit_date']);
                // // Validate 'visit_date' format
                // $validator = validator($rows->toArray(), [
                //     '*.visit_date' => ['nullable', 'date', 'date_format:Y-m-d', 'date_format:Y-m-d H:i:s'],
                // ]);

                // if ($validator->fails()) {
                //     throw ValidationException::withMessages(['visit_date' => ['Invalid date format for visit_date']]);
                // }
            } else {
                $row['visit_date'] = null;
            }
        }
    }
}
