<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\roleTypeUser;
use App\Models\module_permission;
use Brian2694\Toastr\Facades\Toastr;
use DB;
class RolesController extends Controller
{
    // company/settings/page
    public function companySettings()
    {
        return view('settings.companysettings');
    }
    
    // Roles & Permissions 
    public function rolesPermissions(Request $request)
    {
        $rolesPermissions = roleTypeUser::All();
        $menus = DB::table('menus')->get();
        // $modul_permission = DB::table('module_permissions')->where('role_id',$request->role_id)->get();
        $title="Setting Roles SDA CMS";
        return view('roles.rolespermission',compact('rolesPermissions','title','menus'));
    }

    // add role permissions
    public function addRoles(Request $request)
    {
        $request->validate([
            'roleName' => 'required|string|max:255',
        ]);
        
        DB::beginTransaction();
        try{

            $roles = RolesPermissions::where('permissions_name', '=', $request->roleName)->first();
            if ($roles === null)
            {
                // roles name doesn't exist
                $role = new RolesPermissions;
                $role->permissions_name = $request->roleName;
                $role->save();
            }else{

                // roles name exits
                DB::rollback();
                Toastr::error('Roles name exits :)','Error');
                return redirect()->back();
            }

            DB::commit();
            Toastr::success('Create new role successfully :)','Success');
            return redirect()->back();
        }catch(\Exception $e){
            DB::rollback();
            Toastr::error('Add Role fail :)','Error');
            return redirect()->back();
        }
    }

    // edit roles permissions
    public function editRolesPermissions(Request $request)
    {
        DB::beginTransaction();
        try{
            $id        = $request->id;
            $roleName  = $request->roleName;
            
            $update = [
                'id'               => $id,
                'permissions_name' => $roleName,
            ];

            RolesPermissions::where('id',$id)->update($update);
            DB::commit();
            Toastr::success('Role Name updated successfully :)','Success');
            return redirect()->back();

        }catch(\Exception $e){
            DB::rollback();
            Toastr::error('Role Name update fail :)','Error');
            return redirect()->back();
        }
    }
    // delete roles permissions
    public function deleteRolesPermissions(Request $request)
    {
        try{
            RolesPermissions::destroy($request->id);
            Toastr::success('Role Name deleted successfully :)','Success');
            return redirect()->back();
        
        }catch(\Exception $e){
            DB::rollback();
            Toastr::error('Role Name delete fail :)','Error');
            return redirect()->back();
        }
    }

    //daerah modules permission


    

    public function addModules(Request $request)
    {
        
        
       DB::beginTransaction();

      
        try{

           $id_menu = ($request->module_permission) ;
           $roleid=($request->role_id);
           $view=($request->view);
           $create=($request->create);
           $edit=($request->edit);
           $delete=($request->delete);
           $avoid_duplicate_view=module_permission::select('view','id','role_id','module_permission')
          ->where('role_id',$roleid)
          ->where('module_permission',$id_menu)
          ->get();

          $total_dataview=count($avoid_duplicate_view);

          $i=0;
          $all_array_view=[];
          $all_array_id=[];
          $all_array_modulepermissions=[];
          $all_array_roleid=[];

          while($i <  $total_dataview ){

          $dataall_view=$avoid_duplicate_view[$i]['view'];
  
          $dataall_id=$avoid_duplicate_view[$i]['id'];

          $dataall_modulepermissions=$avoid_duplicate_view[$i]['module_permission'];

          $dataall_roleid=$avoid_duplicate_view[$i]['role_id'];
  
          array_push( $all_array_id, $dataall_id);
          array_push( $all_array_view, $dataall_view);
          array_push( $all_array_modulepermissions, $dataall_modulepermissions);
          array_push( $all_array_roleid, $dataall_roleid);
         
           $i++;
  
          }

          

        //    $avoid_duplicate_create=module_permission::select('create')->where('role_id',$roleid)
        //    ->where('module_permission',$id_menu)
        //    ->get();

        //    $avoid_duplicate_edit=module_permission::select('edit')->where('role_id',$roleid)
        //    ->where('module_permission',$id_menu)
        //    ->get();

        //    $avoid_duplicate_delete=module_permission::select('delete')->where('role_id',$roleid)
        //    ->where('module_permission',$id_menu)
        //    ->get();

        if($all_array_modulepermissions == [$id_menu] &&  $all_array_roleid ==  [$roleid]){

            return response()->json(['data' =>"","message"=>"modul sudah ada dalam sistem!","status"=>403]);


        }


       else{

            DB::table('module_permissions')->insert( [
                'role_id'                => $roleid,
                'module_permission'      => $id_menu,
                 'view'                  => $view,
                 'create'                => $create,
                 'edit'                  => $edit,
                 'delete'                => $delete
            ]);

           
    
            DB::commit();

            return response()->json(['data' => $request->all(),'data_view'=>$all_array_view,'data_id'=> $all_array_id,'data_module'=>$all_array_modulepermissions,'data_role'=>$all_array_roleid,"status"=>200 ],200);
    
    
        
          


        }
        
            

       

      
        }catch(\Exception $e){
            DB::rollback();
            Toastr::error('Add Module fail :)','Error');
            return redirect()->back();
        }



       


    }

    public function editModules(Request $request)
    {
        DB::beginTransaction();
        try{
           
            $id_menu = ($request->module_permission) ;
            $roleid=($request->role_id);
            $view=($request->view);
            $create=($request->create);
            $edit=($request->edit);
            $delete=($request->delete);
            $id_modul=($request->idmodul);

         
                if($view!=''){

                    $updates = [

                        'role_id'                => $roleid,
                        'module_permission'      => $id_menu,
                         'view'                  => $view,
                        
                    ];


                }

                if($create!=''){

                    $updates = [

                        'role_id'                => $roleid,
                        'module_permission'      => $id_menu,
                         'create'                => $create,
                        
                    ];


                }
                if($edit!=''){

                    $updates = [

                        'role_id'                => $roleid,
                        'module_permission'      => $id_menu,
                         'edit'                  => $edit,
                        
                    ];


                }

                if($delete!=''){

                    $updates = [

                        'role_id'                => $roleid,
                        'module_permission'      => $id_menu,
                         'delete'                => $delete,
                        
                    ];


                }


            
             // Edit modules permission

             DB::table('module_permissions')->where('id',$id_modul)->update($updates);
             DB::commit();
            

            return response()->json(['data' => $updates], 200);

        }catch(\Exception $e){
            DB::rollback();
            Toastr::error('Modules Name update fail :)','Error');
            return redirect()->back();
        }
    }

    


}
