<?php

namespace App\Service;

use App\Models\Practice;

class PracticeService
{
    public function createPractice($request)
    {
        try {
            $practice = Practice::create([
                'name' => $request->name,
                'org_type_id' => $request->org_type_id,
                'taxonomy_spec_id' => $request->taxonomy_spec_id,
                'reference' => $request->reference,
                'tcn_prefix' => $request->tcn_prefix,
                'practice_code' => $request->practice_code,
                'address1' => $request->address1,
                'address2' => $request->address2,
                'city' => $request->city,
                'state' => $request->state,
                'zip' => $request->zip,
                'phone' => $request->phone,
                'fax' => $request->fax,
                'email' => $request->email,
                'extension' => $request->extension,
                'website' => $request->website,
                'tax_id' => $request->tax_id,
                'pay_address1' => $request->pay_address1,
                'pay_address2' => $request->pay_address2,
                'pay_city' => $request->pay_city,
                'pay_state' => $request->pay_state,
                'pay_zip' => $request->pay_zip,
                'practice_status' => $request->practice_status,
                'statement_tcn_prefix' => $request->statement_tcn_prefix,
                'customer_id' => $request->customer_id,
                'user_id' => $request->user_id,
                'npi_code' => $request->npi_code,
                'payaddress_same_pa' => $request->payaddress_same_pa


            ]);
            return $practice;
        } catch (\Throwable $th) {
            return response()->json([
                'error' => $th->getMessage(),
                'trace' => $th->getTrace()
            ], 500);
        }
    }
}
