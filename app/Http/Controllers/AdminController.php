<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Actividad;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     /*Funcion para solicitar login*/
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = array(
            'count_user' => DB::table('users')->count(),
            'menu'      => 'Admin.menu.v_menu_admin',
            'content' => 'Admin.content.view_dashboard'
        );
        return view('Admin.layouts.v_template',$data);
    }


}
