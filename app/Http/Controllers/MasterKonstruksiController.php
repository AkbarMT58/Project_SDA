<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Konstruksi;
use App\Models\Employee;
use App\Models\department;
use App\Models\User;
use App\Models\module_permission;
use App\Models\roleTypeUser;
use Auth;

class MasterKonstruksiController extends Controller
{
    // all saluran
    public function AllKonstruksi(Request $request)
    {
        $konstruksi = DB::table('konstruksis')->get(); 
        $userList = DB::table('users')->get();
        $title="Master Data Konstruksi SDA";
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
 



        return view('masterdata.konstruksi',compact('konstruksi','userList','permission_lists','title','modul_permission','data_subchildcategorymenu','rolesPermissions'));
    }
    // all saluran
   

    // save data saluran
    public function saveKonstruksi(Request $request)
    {
        $request->validate([
            'namekonstruksi'        => 'required|string|max:255',
          
        ]);

        DB::beginTransaction();
        try{

        
                $konstruksi = new Konstruksi;
                $konstruksi->namakonstruksi  = $request->namekonstruksi;
                $konstruksi->save();
    
        
                DB::commit();
                Toastr::success('Add new konstruksi successfully :)','Success');
                return redirect()->route('all/konstruksi');
          
        }catch(\Exception $e){
            DB::rollback();
            Toastr::error('Add new konstruksi fail :)','Error');
            return redirect()->back();
        }
    }
   
    // update record saluran
    public function updateKonstruksi( Request $request)
    {
        DB::beginTransaction();
        try{
            // update table Saluran
            $updateKonstruksi = [
               
                'namakonstruksi'=>$request->namekonstruksi
               
            ];
       


            Konstruksi::where('id',$request->id)->update($updateKonstruksi);
          
        
            DB::commit();
            Toastr::success('updated konstruksi successfully :)','Success');
            return redirect()->route('all/konstruksi');
        }catch(\Exception $e){
            DB::rollback();
            Toastr::error('updated konstruksi fail :)','Error');
            return redirect()->back();
        }
    }
    // delete record
    public function deleteKonstruksi($saluran_id)
    {
        DB::beginTransaction();
        try{

            Saluran::where('d',$saluran_id)->delete();
           

            DB::commit();
            Toastr::success('Delete record successfully :)','Success');
            return redirect()->route('all/saluran');

        }catch(\Exception $e){
            DB::rollback();
            Toastr::error('Delete record fail :)','Error');
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
