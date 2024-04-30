<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Saluran;


use Auth;

class MasterSaluranController extends Controller
{
    // all saluran
    public function AllSaluran(Request $request)
    {
        $salurans = DB::table('salurans')->get(); 
        $userList = DB::table('users')->get();
        $permission_lists = DB::table('permission_lists')->get();
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
 

        $title="Master Data Saluran SDA";
        return view('masterdata.saluran',compact('salurans','userList','permission_lists','title','modul_permission','data_subchildcategorymenu'));
    }
    // all saluran
   
    // save data saluran
    public function saveSaluran(Request $request)
    {
    

        DB::beginTransaction();
        try{
                $salurans = new Saluran;
                $salurans->namasaluran  = $request->namasaluran;
                $salurans->save();
    
                DB::commit();
                Toastr::success('Add new saluran successfully :)','Success');
                return redirect()->route('saluran');
          
        }catch(\Exception $e){
            DB::rollback();
            Toastr::error('Add new saluran fail :)','Error');
            return redirect()->back();
        }
    }
   
    // update saluran 
    public function updateSaluran( Request $request)
    {
        DB::beginTransaction();
        try{
            // update table Saluran
            $updateSaluran = [
               
                'namasaluran'=>$request->namasaluran
               
            ];
       

            Saluran::where('id',$request->id)->update($updateSaluran);
          
        
            DB::commit();
            Toastr::success('updated saluran successfully :)','Success');
            return redirect()->route('saluran');

        }catch(\Exception $e){
            DB::rollback();
            Toastr::error('updated saluran fail :)','Error');
            return redirect()->back();
        }
    }
    // delete record
    public function deleteSaluran($saluran_id)
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
    public function SaluranSearch(Request $request)
    {
        $users = DB::table('users')
                    ->join('employees', 'users.user_id', '=', 'employees.employee_id')
                    ->select('users.*', 'employees.birth_date', 'employees.gender', 'employees.company')
                    ->get();
        $permission_lists = DB::table('permission_lists')->get();
        $userList = DB::table('users')->get();

        // search by id
        if($request->employee_id)
        {
            $users = DB::table('users')
                        ->join('employees', 'users.user_id', '=', 'employees.employee_id')
                        ->select('users.*', 'employees.birth_date', 'employees.gender', 'employees.company')
                        ->where('employee_id','LIKE','%'.$request->employee_id.'%')
                        ->get();
        }
        // search by name
        if($request->name)
        {
            $users = DB::table('users')
                        ->join('employees', 'users.user_id', '=', 'employees.employee_id')
                        ->select('users.*', 'employees.birth_date', 'employees.gender', 'employees.company')
                        ->where('users.name','LIKE','%'.$request->name.'%')
                        ->get();
        }
        // search by name
        if($request->position)
        {
            $users = DB::table('users')
                        ->join('employees', 'users.user_id', '=', 'employees.employee_id')
                        ->select('users.*', 'employees.birth_date', 'employees.gender', 'employees.company')
                        ->where('users.position','LIKE','%'.$request->position.'%')
                        ->get();
        }

        // search by name and id
        if($request->employee_id && $request->name)
        {
            $users = DB::table('users')
                        ->join('employees', 'users.user_id', '=', 'employees.employee_id')
                        ->select('users.*', 'employees.birth_date', 'employees.gender', 'employees.company')
                        ->where('employee_id','LIKE','%'.$request->employee_id.'%')
                        ->where('users.name','LIKE','%'.$request->name.'%')
                        ->get();
        }
        // search by position and id
        if($request->employee_id && $request->position)
        {
            $users = DB::table('users')
                        ->join('employees', 'users.user_id', '=', 'employees.employee_id')
                        ->select('users.*', 'employees.birth_date', 'employees.gender', 'employees.company')
                        ->where('employee_id','LIKE','%'.$request->employee_id.'%')
                        ->where('users.position','LIKE','%'.$request->position.'%')
                        ->get();
        }
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
        return view('form.allemployeecard',compact('users','userList','permission_lists'));
    }
    public function employeeListSearch(Request $request)
    {
        $users = DB::table('users')
                    ->join('employees', 'users.user_id', '=', 'employees.employee_id')
                    ->select('users.*', 'employees.birth_date', 'employees.gender', 'employees.company')
                    ->get(); 
        $permission_lists = DB::table('permission_lists')->get();
        $userList = DB::table('users')->get();

        // search by id
        if($request->employee_id)
        {
            $users = DB::table('users')
                        ->join('employees', 'users.user_id', '=', 'employees.employee_id')
                        ->select('users.*', 'employees.birth_date', 'employees.gender', 'employees.company')
                        ->where('employee_id','LIKE','%'.$request->employee_id.'%')
                        ->get();
        }
        // search by name
        if($request->name)
        {
            $users = DB::table('users')
                        ->join('employees', 'users.user_id', '=', 'employees.employee_id')
                        ->select('users.*', 'employees.birth_date', 'employees.gender', 'employees.company')
                        ->where('users.name','LIKE','%'.$request->name.'%')
                        ->get();
        }
        // search by name
        if($request->position)
        {
            $users = DB::table('users')
                        ->join('employees', 'users.user_id', '=', 'employees.employee_id')
                        ->select('users.*', 'employees.birth_date', 'employees.gender', 'employees.company')
                        ->where('users.position','LIKE','%'.$request->position.'%')
                        ->get();
        }

        // search by name and id
        if($request->employee_id && $request->name)
        {
            $users = DB::table('users')
                        ->join('employees', 'users.user_id', '=', 'employees.employee_id')
                        ->select('users.*', 'employees.birth_date', 'employees.gender', 'employees.company')
                        ->where('employee_id','LIKE','%'.$request->employee_id.'%')
                        ->where('users.name','LIKE','%'.$request->name.'%')
                        ->get();
        }
        // search by position and id
        if($request->employee_id && $request->position)
        {
            $users = DB::table('users')
                        ->join('employees', 'users.user_id', '=', 'employees.employee_id')
                        ->select('users.*', 'employees.birth_date', 'employees.gender', 'employees.company')
                        ->where('employee_id','LIKE','%'.$request->employee_id.'%')
                        ->where('users.position','LIKE','%'.$request->position.'%')
                        ->get();
        }
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

    // employee profile with all controller user
    public function profileEmployee($user_id)
    {
        $users = DB::table('users')
                ->leftJoin('personal_information','personal_information.user_id','users.user_id')
                ->leftJoin('profile_information','profile_information.user_id','users.user_id')
                ->where('users.user_id',$user_id)
                ->first();
        $user = DB::table('users')
                ->leftJoin('personal_information','personal_information.user_id','users.user_id')
                ->leftJoin('profile_information','profile_information.user_id','users.user_id')
                ->where('users.user_id',$user_id)
                ->get(); 
        return view('form.employeeprofile',compact('user','users'));
    }

    /** page departments */
    public function index()
    {
        $departments = DB::table('departments')->get();
        return view('form.departments',compact('departments'));
    }

    /** save record department */
    public function saveRecordDepartment(Request $request)
    {
        $request->validate([
            'department'        => 'required|string|max:255',
        ]);

        DB::beginTransaction();
        try{

            $department = department::where('department',$request->department)->first();
            if ($department === null)
            {
                $department = new department;
                $department->department = $request->department;
                $department->save();
    
                DB::commit();
                Toastr::success('Add new department successfully :)','Success');
                return redirect()->route('form/departments/page');
            } else {
                DB::rollback();
                Toastr::error('Add new department exits :)','Error');
                return redirect()->back();
            }
        }catch(\Exception $e){
            DB::rollback();
            Toastr::error('Add new department fail :)','Error');
            return redirect()->back();
        }
    }





}
