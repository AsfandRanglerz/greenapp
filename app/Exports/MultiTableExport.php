<?php

namespace App\Exports;

use App\Models\User;
use App\Models\PartTimeAndTemporary;
use App\Models\UaeAndGccNational;
use App\Models\PermitCancellation;
use App\Models\SponsaredBySomeOne;
use App\Models\ModifyContract;
use App\Models\NewVisaProcess;
use App\Models\RenewalProcess;
use App\Models\VisaCancelation;
use App\Models\ModificationVisaEmiratesId;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class MultiTableExport implements FromCollection , WithHeadings
{
    protected $table;
    protected $employee_id;

    public function __construct($table, $employee_id)
    {
        $this->table = $table;
        $this->employee_id = $employee_id;

    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // Fetch data based on the table name and user ID
        $data = $this->getDataForTable($this->table, $this->employee_id);

        // Organize data into categories and select specific columns
        return $this->organizeData($data);
    }

    public function headings(): array
    {
        // Define column headers based on the table name
        return $this->getHeadingsForTable($this->table);
    }

    protected function getDataForTable($tableName, $employee_id)
    {
        // Fetch data based on the table name and user ID
        switch ($tableName) {
            case 'NewVisaProcess':
                return NewVisaProcess::where('employee_id', $employee_id)->get();

            case 'RenewalProcess':
                return RenewalProcess::where('employee_id', $employee_id)->get();
                // return RenewalProcess::all();

            case 'SponsaredBySomeOne':
                return SponsaredBySomeOne::where('employee_id', $employee_id)->get(['id', 'order_date', 'total_amount']);

            case 'PartTimeAndTemporary':
                return PartTimeAndTemporary::where('employee_id', $employee_id)->get(['id', 'product_id', 'amount']);


            case 'UaeAndGccNational':
                return UaeAndGccNational::where('employee_id', $employee_id)->get(['id', 'product_id', 'amount']);


            case 'ModifyContract':
                return ModifyContract::where('employee_id', $employee_id)->get(['id', 'product_id', 'amount']);


            case 'ModificationVisaEmiratesId':
                return ModificationVisaEmiratesId::where('employee_id', $employee_id)->where('process_name', 'modification of visa')->get(['id', 'product_id', 'amount']);

            case 'ModificationVisaEmiratesId':
                return ModificationVisaEmiratesId::where('employee_id', $employee_id)->where('process_name', 'modification of emirates Id')->get(['id', 'product_id', 'amount']);

            case 'VisaCancelation':
               return VisaCancelation::where('employee_id', $employee_id)->get(['id', 'product_id', 'amount']);

            case 'PermitCancellation':
                return PermitCancellation::where('employee_id', $employee_id)->get(['id', 'product_id', 'amount']);

            default:
                return collect(); // Return an empty collection if the table is not recognized
        }
    }

    protected function organizeData(Collection $data)
    {
        // Organize data into categories and select specific columns
        switch ($this->table) {
            case 'NewVisaProcess':
                return collect([
                    'Personal Information' => $data->only(['job_offer_tran_no', 'job_offer_mb_trc_no', 'job_offer_tran_no'])->toArray(),
                    'Dubai Insurance' => $data->only(['dubai_insurance_tran_no','dubai_insurance_tran_fees'])->toArray(),
                ]);
                case 'RenewalProcess':
                    return collect($data->toArray());

            case 'orders':
                return collect(['Order Information' => $data->toArray()]);
            case 'prices':
                return collect(['Price Information' => $data->toArray()]);
            default:
                return collect(); // Return an empty collection if the table is not recognized
        }
    }

    protected function getHeadingsForTable($tableName)
    {
        // Define column headers based on the table name
        switch ($tableName) {
            case 'NewVisaProcess':
                return [
                    'Personal Information' => ['job_offer_tran_no', 'job_offer_mb_trc_no', 'job_offer_tran_no'],
                    'Dubai Insurance' => ['dubai_insurance_tran_no','dubai_insurance_tran_fees'],
                ];
            case 'RenewalProcess':
                return [
                    'Transaction Type','Transaction No', 'Transaction Fee',
                    // Include other fields as needed
                ];
            case 'orders':
                return ['Order Information' => ['ID', 'Order Date', 'Total Amount']];
            case 'prices':
                return ['Price Information' => ['ID', 'Product ID', 'Amount']];
            default:
                return []; // Return an empty array if the table is not recognized
        }
    }
}
