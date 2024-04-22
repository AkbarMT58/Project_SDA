<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use PDF;
use App\Models\User;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // main dashboard
    public function index()
    {

        $title="Dashboard-SDA";

        $role_id=Auth::user()->role_name;

         $modul_permission = DB::table('menus as a')

        ->select('a.id','b.id as id_modul','a.namamenu','a.namaicons','a.categorymenu','a.sub_categorymenu','a.index_no','a.link_menu','b.role_id','b.view','b.create','b.edit','b.delete')

        ->leftJoin("module_permissions as b","b.module_permission","=","a.id")
        
        ->where("b.role_id", $role_id)

        ->orderBy("a.sub_categorymenu",'ASC')
        
        ->get();

        $data_subchidcategorymenu = DB::table('menus as a')

        ->select('a.id','b.id as id_modul','a.namamenu','a.namaicons','a.categorymenu','a.sub_categorymenu','a.sub_childcategorymenu','a.index_no','a.link_menu','b.role_id','b.view','b.create','b.edit','b.delete')
 
        ->leftJoin("module_permissions as b","b.module_permission","=","a.id")
        
        ->where("b.role_id", $role_id)
 
        ->orderBy("a.sub_categorymenu",'ASC')
        
        ->get();
 
      
        $userList = DB::table('users')->get();
        $permission_lists = DB::table('permission_lists')->get();

        return view('dashboard.dashboard',compact('title','modul_permission','data_subchidcategorymenu'));
    }

    public function satgasDashboard()
    {

        $title="Dashboard-Satgas";

        $role_id=Auth::user()->role_name;

         $modul_permission = DB::table('menus as a')

         ->select('a.id','b.id as id_modul','a.namamenu','a.namaicons','a.categorymenu','a.sub_categorymenu','a.index_no','a.link_menu','b.role_id','b.view','b.create','b.edit','b.delete')

         ->leftJoin("module_permissions as b","b.module_permission","=","a.id")
         
         ->where("b.role_id", $role_id)
 
         ->orderBy("a.sub_categorymenu",'ASC')
         
         ->get();
        

        $data_subchidcategorymenu = DB::table('menus as a')

        ->select('a.id','b.id as id_modul','a.namamenu','a.namaicons','a.categorymenu','a.sub_categorymenu','a.sub_childcategorymenu','a.index_no','a.link_menu','b.role_id','b.view','b.create','b.edit','b.delete')
 
        ->leftJoin("module_permissions as b","b.module_permission","=","a.id")
        
        ->where("b.role_id", $role_id)
 
        ->orderBy("a.sub_categorymenu",'ASC')
        
        ->get();
 
      
        $userList = DB::table('users')->get();
        $permission_lists = DB::table('permission_lists')->get();

        return view('dashboard.satgas',compact('title','modul_permission','data_subchidcategorymenu'));
    }
    // employee dashboard
    public function emDashboard()
    {
        $dt        = Carbon::now();
        $todayDate = $dt->toDayDateTimeString();
        return view('dashboard.emdashboard',compact('todayDate'));
    }

    public function generatePDF(Request $request)
    {
        // $data = ['title' => 'Welcome to ItSolutionStuff.com'];
        // $pdf = PDF::loadView('payroll.salaryview', $data);
        // return $pdf->download('text.pdf');
        // selecting PDF view
        $pdf = PDF::loadView('payroll.salaryview');
        // download pdf file
        return $pdf->download('pdfview.pdf');
    }
}
