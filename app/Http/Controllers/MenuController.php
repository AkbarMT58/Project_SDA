<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Employee;
use App\Models\department;
use App\Models\User;
use App\Models\module_permission;
use App\Models\Menu;

class MenuController extends Controller
{
  
    // all menu list
    public function listAllMenu()
    {
        $menus = DB::table('menus')->get();
        $title="Setting Menu SDA CMS";
         $userList = DB::table('users')->get();
         $permission_lists = DB::table('permission_lists')->get();
        return view('menu.listmenu',compact('menus','userList','permission_lists','title'));
    }

    // save data menu
    public function addMenus(Request $request)
    {
        $request->validate([


            'namamenu'              => '',
            'namaicons'             => '',
            'categorymenu'          => '',
            'subcategorymenu'          => '',
            'indexno'               => '',
            'linkmenu'              => '',
            
        ]);

        DB::beginTransaction();
        try{

           
                $menus = new Menu;
                $menus->    namamenu        = $request->namamenu;
                $menus->    namaicons       = $request->namaclassicon;
                $menus->    categorymenu    = $request->namacategory;
                $menus->    sub_categorymenu    = $request->subcategorymenu;
                $menus->    index_no        = $request->indexno;
                $menus->    link_menu       = $request->linkmenu;
                $menus->save();
    
                
                DB::commit();
                Toastr::success('Penambahan data menu berhasil :)','Success');
                return redirect()->route('menus/page');
           
        }catch(\Exception $e){
            DB::rollback();
            Toastr::error('Penambahan data menu gagal :)','Error');
            return redirect()->back();
        }
    }
    // view edit record
    public function editMenus($id_menu)
    {
        $menus = DB::table('menus')
            ->where('menus.id','=',$id_menu)
            ->get();
       
        return view('menu.edit',compact('menus'));
    }
    // update record employee
    public function updateMenus( Request $request)
    {
        DB::beginTransaction();
        $request->validate([

            'namamenu'              => '',
            'namaicons'             => '',
            'categorymenu'          => '',
            'indexno'               => '',
            'linkmenu'              => '',
            
        ]);

      
        try{

              
                $menus = [
                    'namamenu'            => $request->namamenu,
                    'namaicons'           => $request->namaclassicon,
                    'categorymenu'        => $request->namacategory,
                    'sub_categorymenu'    => $request->subcategorymenu,
                    'index_no'            => $request->indexno,
                    'link_menu'           => $request->linkmenu,
                   
                ];


                
              
            Menu::where('id',$request->id)->update($menus);
            
        
            DB::commit();
            Toastr::success('updated menus successfully :)','Success');
            return redirect()->route('menus/page');
        }catch(\Exception $e){
            DB::rollback();
            Toastr::error('updated menus fail :)','Error');
            return redirect()->back();
        }
    }
    // delete record
    public function deleteMenus(Request $request)
    {
        DB::beginTransaction();
        try{

            Menu::where('id',$request->id)->delete();
          
            DB::commit();
            Toastr::success('Delete menu sukses :)','Success');
            return redirect()->back();

        }catch(\Exception $e){
            DB::rollback();
            Toastr::error('Delete menu gagal :)','Error');
            return redirect()->back();
        }
    }
    // menu search
    public function employeeSearch(Request $request)
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

   

}
