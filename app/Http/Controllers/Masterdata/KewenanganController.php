<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Employee;
use App\Models\department;
use App\Models\User;
use App\Models\module_permission;

class KewenanganController extends Controller
{
    // all saluran
    public function AllKewenangan(Request $request)
    {
        $salurans = DB::table('kewenangan')->get(); 
        $userList = DB::table('users')->get();
        $permission_lists = DB::table('permission_lists')->get();
        return view('masterdata.kewenangan',compact('salurans','userList','permission_lists'));
    }
   

    // save data saluran
    public function saveKewenangan(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
          
        ]);

        DB::beginTransaction();
        try{

        
                $konstruksi = new Saluran;
                $konstruksi->namamenu  = $request->namamenu;
                $konstruksi->save();
    
        
                DB::commit();
                Toastr::success('Add new konstruksi successfully :)','Success');
                return redirect()->route('all/saluran');
          
        }catch(\Exception $e){
            DB::rollback();
            Toastr::error('Add new konstruksi fail :)','Error');
            return redirect()->back();
        }
    }
   
    // update record saluran
    public function updateKewenangan( Request $request)
    {
        DB::beginTransaction();
        try{
            // update table Saluran
            $updateSaluran = [
               
                'namasaluran'=>$request->namasaluran
               
            ];
    
            Konstruksi::where('id',$request->id)->update($updateSaluran);
          
            DB::commit();
            Toastr::success('updated konstruksi successfully :)','Success');
            return redirect()->route('all/saluran');
        }catch(\Exception $e){
            DB::rollback();
            Toastr::error('updated konstruksi fail :)','Error');
            return redirect()->back();
        }
    }
    // delete record
    public function deleteKewenangan($saluran_id)
    {
        DB::beginTransaction();
        try{

            Konstruksi::where('d',$saluran_id)->delete();
           

            DB::commit();
            Toastr::success('Delete konstruksi successfully :)','Success');
            return redirect()->route('all/saluran');

        }catch(\Exception $e){
            DB::rollback();
            Toastr::error('Delete konstruksi fail :)','Error');
            return redirect()->back();
        }
    }
    // saluran search
    public function KonstruksiSearch(Request $request)
    {
        $users = DB::table('users')
                    ->join('employees', 'users.user_id', '=', 'employees.employee_id')
                    ->select('users.*', 'employees.birth_date', 'employees.gender', 'employees.company')
                    ->get();
        $permission_lists = DB::table('permission_lists')->get();
        $userList = DB::table('users')->get();

       
        // search by name and position
        if($request->name && $request->position)
        {
            $users = DB::table('users')
                        ->join('employees', 'users.user_id', '=', 'employees.employee_id')
                        ->select('users.*', 'employees.birth_date', 'employees.gender', 'employees.company')
                        ->where('users.name','LIKE','%'.$request->name.'%')
                        ->where('users.position','LIKE','%'.$request->position.'%')
                        ->get();
        }
        // search by name and position and id
        if($request->employee_id && $request->name && $request->position)
        {
            $users = DB::table('users')
                        ->join('employees', 'users.user_id', '=', 'employees.employee_id')
                        ->select('users.*', 'employees.birth_date', 'employees.gender', 'employees.company')
                        ->where('employee_id','LIKE','%'.$request->employee_id.'%')
                        ->where('users.name','LIKE','%'.$request->name.'%')
                        ->where('users.position','LIKE','%'.$request->position.'%')
                        ->get();
        }
        return view('form.employeelist',compact('users','userList','permission_lists'));
    }

 



}
