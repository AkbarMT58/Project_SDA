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

           $id_menu = array($request->idmenu) ;
        
           $roleid=array($request->roleid);

           $view=array($request->view);
           $create=array($request->create);
           $edit=array($request->edit);
           $delete=array($request->delete);

        
           $tot_modul=count($id_menu);

         

          
        

                for($i=0;$i < $tot_modul;$i++){

                  
                    $modules_in= [
                        'role_id'               => $roleid,
                        'module_permission'      => $id_menu,
                         'view'                  => $view[$i],
                         'create'                => $create[$i],
                         'edit'                  => $edit[$i],
                         'delete'                => $delete[$i],
                    ];

         
        
                
              

                }

                //dd( $modules_in);

                module_permission::create($modules_in);
                 

                   DB::commit();
                   Toastr::success('Create new add modules successfully :)','Success');
                   return redirect()->back();
   

        

            // else{

            //     DB::rollback();
            //     Toastr::error('Modules proccess exits :)','Error');
            //     return redirect()->back();
            // }

            // DB::commit();
            // Toastr::success('Create new add modules successfully :)','Success');
            // return redirect()->back();

     
               

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
            $id        = $request->id;
            $roleName  = $request->roleName;
            
            $update = [
                'id'               => $id,
                'permissions_name' => $roleName,
            ];

             // Edit modules permission

            RolesPermissions::where('id',$id)->update($update);
            DB::commit();
            Toastr::success('Modules Name updated successfully :)','Success');
            return redirect()->back();

        }catch(\Exception $e){
            DB::rollback();
            Toastr::error('Modules Name update fail :)','Error');
            return redirect()->back();
        }
    }

    


}
