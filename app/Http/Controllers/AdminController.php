<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use App\Models\medicine_sold;
use App\Models\quantity_received;
use App\Models\damaged_medicine;
use App\Models\medicine_return;
use App\Models\expired_medicine;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function dashboard(){
        $sold = medicine_sold::where('status', 'pending')->latest()->get();
        $received = quantity_received::where('status','pending')->latest()->get();
        $damaged = damaged_medicine::where('status','pending')->latest()->get();
        $expired = expired_medicine::where('status','pending')->latest()->get();
        $returned = medicine_return::where('status','pending')->latest()->get();

        return view('Dashboard.Admin.manage', compact('sold','received','damaged','expired','returned'));
    }

    public function approveStockReceived($id){
        DB::transaction(function () use ($id){
    
        $record = quantity_received::lockForUpdate()->findOrFail($id);


        if($record->status !== 'pending'){
            abort(400,'this record has already been proceed');
        }

        $medicine = Medicine::where('Medicine_Name',$record->Medicine_Name)->where('Batch_Number',$record->Batch_Number)
        ->first();

        if($medicine){
            $medicine->Quantity += $record->Quantity_Received;
            $medicine->save();
        }else{
            Medicine::create([
                    'Medicine_Name' => $record->Medicine_Name,
                    'Batch_Number' => $record->Batch_Number,
                    'Quantity' => $record->Quantity_Received,
                ]);
        }
        $record->status = 'approved';
        $record->save();

        return redirect()->back()
            ->with('success', 'Stock received request approved successfully.');

    });
    }

    public function approveMedicineSold($id)
    {
        DB::transaction(function () use ($id) {

            $record = medicine_sold::lockForUpdate()->findOrFail($id);

            if ($record->status !== 'pending') {
                abort(400, 'This record has already been processed.');
            }

            $medicine = Medicine::where('Medicine_Name', $record->Medicine_Name)
                ->where('Batch_Number', $record->Batch_Number)
                ->lockForUpdate()
                ->first();

            if (!$medicine) {
                abort(400, 'Medicine or batch was not found in inventory.');
            }

            // Check stock
            if ($medicine->Quantity < $record->Quantity_Sold) {
                abort(
                    400,
                    'Cannot approve sale. Only ' .
                    $medicine->Quantity .
                    ' units are available.'
                );
            }

            // Remove sold quantity
            $medicine->Quantity -= $record->Quantity_Sold;
            $medicine->save();

            // Approve record
            $record->status = 'approved';
            $record->save();
        });

        return redirect()->back()
            ->with('success', 'Medicine sale approved successfully.');
    }

    
    public function approveDamagedMedicine($id)
    {
        DB::transaction(function () use ($id) {

            $record = damaged_medicine::lockForUpdate()->findOrFail($id);

            if ($record->status !== 'pending') {
                abort(400, 'This record has already been processed.');
            }

            $medicine = Medicine::where('Medicine_Name', $record->Medicine_Name)
                ->where('Batch_Number', $record->Batch_Number)
                ->lockForUpdate()
                ->first();

            if (!$medicine) {
                abort(400, 'Medicine or batch was not found in inventory.');
            }

            // Check stock
            if ($medicine->Quantity < $record->Quantity_Damaged) {
                abort(
                    400,
                    'Cannot approve damaged medicine. Only ' .
                    $medicine->Quantity .
                    ' units are available.'
                );
            }

            // Remove damaged quantity
            $medicine->Quantity -= $record->Quantity_Damaged;
            $medicine->save();

            // Approve record
            $record->status = 'approved';
            $record->save();
        });

        return redirect()->back()
            ->with('success', 'Damaged medicine approved successfully.');
    }

       public function approveExpiredMedicine($id)
    {
        DB::transaction(function () use ($id) {

            $record = expired_medicine::lockForUpdate()->findOrFail($id);

            if ($record->status !== 'pending') {
                abort(400, 'This record has already been processed.');
            }

            $medicine = Medicine::where('Medicine_Name', $record->Medicine_Name)
                ->where('Batch_Number', $record->Batch_Number)
                ->lockForUpdate()
                ->first();

            if (!$medicine) {
                abort(400, 'Medicine or batch was not found in inventory.');
            }

            // Check stock
            if ($medicine->Quantity < $record->Quantity) {
                abort(
                    400,
                    'Cannot approve expired medicine. Only ' .
                    $medicine->Quantity .
                    ' units are available.'
                );
            }

            // Remove expired quantity
            $medicine->Quantity -= $record->Quantity;
            $medicine->save();

            // Approve record
            $record->status = 'approved';
            $record->save();
        });

        return redirect()->back()
            ->with('success', 'Expired medicine approved successfully.');
    }


    
    public function approveMedicineReturn($id)
    {
        DB::transaction(function () use ($id) {

            $record = medicine_return::lockForUpdate()->findOrFail($id);

            if ($record->status !== 'pending') {
                abort(400, 'This record has already been processed.');
            }

            $medicine = Medicine::where('Medicine_Name', $record->Medicine_Name)
                ->where('Batch_Number', $record->Batch_Number)
                ->lockForUpdate()
                ->first();

            if (!$medicine) {
                abort(400, 'Medicine or batch was not found in inventory.');
            }

            $condition = strtolower(trim($record->Condition_Of_Medicine));

            if (
                $condition === 'good' ||
                $condition === 'usable'
            ) {
                $medicine->Quantity += $record->Quantity;
                $medicine->save();
            }

            $record->status = 'approved';
            $record->save();
        });

        return redirect()->back()
            ->with('success', 'Medicine return approved successfully.');
    }

    public function rejectStockReceived($id)
    {
        $record = quantity_received::findOrFail($id);

        if ($record->status !== 'pending') {
            return redirect()->back()
                ->with('error', 'This record has already been processed.');
        }

        $record->status = 'rejected';
        $record->save();

        return redirect()->back()
            ->with('success', 'Stock received request rejected.');
    }


    public function rejectMedicineSold($id)
    {
        $record = medicine_sold::findOrFail($id);

        if ($record->status !== 'pending') {
            return redirect()->back()
                ->with('error', 'This record has already been processed.');
        }

        $record->status = 'rejected';
        $record->save();

        return redirect()->back()
            ->with('success', 'Medicine sale rejected.');
    }


    public function rejectDamagedMedicine($id)
    {
        $record = damaged_medicine::findOrFail($id);

        if ($record->status !== 'pending') {
            return redirect()->back()
                ->with('error', 'This record has already been processed.');
        }

        $record->status = 'rejected';
        $record->save();

        return redirect()->back()
            ->with('success', 'Damaged medicine request rejected.');
    }


    public function rejectExpiredMedicine($id)
    {
        $record = expired_medicine::findOrFail($id);

        if ($record->status !== 'pending') {
            return redirect()->back()
                ->with('error', 'This record has already been processed.');
        }

        $record->status = 'rejected';
        $record->save();

        return redirect()->back()
            ->with('success', 'Expired medicine request rejected.');
    }


    public function rejectMedicineReturn($id)
    {
        $record = medicine_return::findOrFail($id);

        if ($record->status !== 'pending') {
            return redirect()->back()
                ->with('error', 'This record has already been processed.');
        }

        $record->status = 'rejected';
        $record->save();

        return redirect()->back()
            ->with('success', 'Medicine return rejected.');
    }

    // public function GetAllMedicine(){
    //     $GetMedicine = Medicine::all();
    //     return view('Dashboard.Admin.Medicine', compact('GetMedicine'));
    // }

    public function Medicine()
    {
        $GetMedicine = Medicine::all();
        return view('Dashboard.Admin.Medicine', compact('GetMedicine'));
    }

    public function user(){
         $users = User::all();

    return view('Dashboard.Admin.user', compact('users'));
        
    }
    public function storeuser(Request $request){

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'role'=>$request->role,
            'password'=>$request->password
            ]);


        return redirect()
    ->back()
    ->with('success', 'Staff account created successfully!');
    }

    public function BlockUser($id)
{
    $user = User::findOrFail($id);
    if($user->role === "admin"){
        return redirect()->back()->with('success', 'you cannot block admin.');
    }

    $user->status = 'blocked';
    $user->save();

    return redirect()->back()->with('success', 'User blocked successfully.');
}

public function UnblockUser($id)
{
    $user = User::findOrFail($id);

    $user->status = 'active';
    $user->save();

    return redirect()->back()->with('success', 'User unblocked successfully.');
}

}
            