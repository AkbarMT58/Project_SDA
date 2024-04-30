<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Kewenangan;
use App\Models\Employee;
use App\Models\department;
use App\Models\User;
use App\Models\module_permission;
use App\Models\roleTypeUser;
use Auth;

class MasterKewenanganController extends Controller
{
    // all saluran
    public function AllKewenangan(Request $request)
    {
        $kewenangan = DB::table('kewenangans')->get(); 
        $userList = DB::table('users')->get();
        $title="Master Data Kewenangan SDA";
        $permission_lists = DB::table('permission_lists')->get();
        $rolesPermissions = roleTypeUser::All();
        $role_id=Auth::user()->role_name;
        


        $modul_permission = DB::table('menus as a')

        ->select('a.id','b.id as id_modul','a.namamenu','a.namaicons','a.categorymenu','a.sub_categorymenu','a.sub_childcategorymenu','a.index_no','a.link_menu','b.role_id','b.view','b.create','b.edit','b.delete')
 
        ->leftJoin("module_permissions as b","b.module_permission","=","a.id")
        
        ->where("b.role_id", $role_id)
 
        ->orderBy("a.sub_categorymenu",'ASC')
        
        ->get();
 
        $data_subchildcategorymenu = DB::table('menus as a')
 
        ->select('a.id','b.id as id_modul','a.namamenu','a.namaicons','a.categorymenu','a.sub_categorymenu','a.jenis_menu','a.sub_childcategorymenu','a.index_no','a.link_menu','b.role_id','b.view','b.create','b.edit','b.delete')
 
        ->leftJoin("module_permissions as b","b.module_permission","=","a.id")
        
        ->where("b.role_id", $role_id)
 
        ->orderBy("a.sub_categorymenu",'ASC')
        
        ->get();
 
        return view('masterdata.kewenangan',compact('kewenangan','userList','permission_lists','title','modul_permission','data_subchildcategorymenu'));
    }
   

    // save data saluran
    public function saveKewenangan(Request $request)
    {
        $request->validate([
            'namakewenangan'        => 'required|string|max:255',
          
        ]);

        DB::beginTransaction();
        try{

        
                $kewenangan = new Kewenangan;
                $kewenangan->namakewenangan  = $request->namakewenangan;
                $kewenangan->save();
    
        
                DB::commit();
                Toastr::success('Add new kewenangan successfully :)','Success');
                return redirect()->route('all/kewenangan');

          
        }catch(\Exception $e){
            DB::rollback();
            Toastr::error('Add new kewenangan fail :)','Error');
            return redirect()->back();
        }
    }
   
    // update record saluran
    public function updateKewenangan( Request $request)
    {
        DB::beginTransaction();
        try{
            // update table Saluran
            $updateKewenangan = [
               
                'namakewenangan'=>$request->namakewenangan
               
            ];
    
            Kewenangan::where('id',$request->id)->update($updateKewenangan);
          
            DB::commit();
            Toastr::success('updated konstruksi successfully :)','Success');
            return redirect()->route('all/kewenangan');

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

            Kewenangan::where('d',$saluran_id)->delete();
    
            DB::commit();
            Toastr::success('Delete kewenangan successfully :)','Success');
            return redirect()->route('all/kewenangan');

        }catch(\Exception $e){
            DB::rollback();
            Toastr::error('Delete kewenangan fail :)','Error');
            return redirect()->back();
        }
    }
    // saluran search
    public function KewenanganSearch(Request $request)
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
