<?php

namespace App\Http\Controllers;
use App\Models\medicine_sold;
use App\Models\quantity_received;
use App\Models\damaged_medicine;
use App\Models\medicine_return;
use App\Models\expired_medicine;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function Medicine_Sold(Request $request)
    {
        // $Medicine_Name = $request->Medicine_Name;
        // $Batch_Number = $request->Batch_Number;
        // $Customer_Name = $request->Customer_Name;
        // $Quantity_Sold = $request->Quantity_Sold;

        medicine_sold::create([
            "Medicine_Name"=>$request->Medicine_Name,
            "Batch_Number"=>$request->Batch_Number,
            "Customer_Name"=>$request->Customer_Name,
            "Quantity_Sold"=>$request->Quantity_Sold,
            "status"=>"pending",
        ]);

        return redirect()->back()->with('success', 'Medicine sold successfully!');

    }
    public function Stock_Received(Request $request)
    {
        quantity_received::create([
            "Medicine_Name"=>$request->Medicine_Name,
            "Batch_Number"=>$request->Batch_Number,
            "Supplier"=>$request->Supplier,
            "Quantity_Received"=>$request->Quantity_Received,
            "status"=>"pending",
        ]);

        return redirect()->back()->with('success', 'Stock received successfully!');

    }

    public function Damaged_Medicine(Request $request)
    {
        damaged_medicine::create([
            "Medicine_Name"=>$request->Medicine_Name,
            "Batch_Number"=>$request->Batch_Number,
            "Quantity_Damaged"=>$request->Quantity_Damaged,
            "Reason_for_Damage"=>$request->Reason_for_Damage,
            "status"=>"pending",
        ]);

        return redirect()->back()->with('success', 'Submit Damaged Medicine successfully!');

    }
    public function Expired_Medicine(Request $request)
    {
        expired_medicine::create([
            "Medicine_Name"=>$request->Medicine_Name,
            "Quantity"=>$request->Quantity,
            "Expiry_Date"=>$request->Expiry_Date,
            "Date_Discovered"=>$request->Date_Discovered,
            "Notes"=>$request->Notes,
            "status"=>"pending",
        ]);

        return redirect()->back()->with('success', 'Submit Expired Medicine successfully!');

    }
    public function Medicine_Return(Request $request)
    {
        medicine_return::create([
            "Medicine_Name"=>$request->Medicine_Name,
            "Batch_Number"=>$request->Batch_Number,
            "Quantity"=>$request->Quantity,
            "Customer"=>$request->Customer,
            "Condition_Of_Medicine"=>$request->Condition_Of_Medicine,
            "Reason_for_Return"=>$request->Reason_for_Return,
            "status"=>"pending",
        ]);

        return redirect()->back()->with('success', 'Medicine return recorded successfully!');

    }
}
