<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ct4her;

class Ct4herController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $data = Ct4her::latest()->get()->toArray();
        // if( !$data['facility_type'] ){
            
        // }

        return view('ct4her.index', [
            'ct4hers' => $data,
        ]);
        
    }

    public function register(){
        return view('ct4her.register',[
            //
        ]);
    }
    public function update($id){
        // dd($id);
        $data = Ct4her::find($id);
        return view('ct4her.update', [
            'ct4herdata' => $data,
        ]);
        
    }
    public function download(){
        $data = Ct4her::latest()->get()->toArray();
        // header('Content-type:aplication/xls');
        // header('Content-Disposition:attachment;filename=results'.date("Y-m-d-h:i:s").'.xls');
        return view('ct4her.download', [
            'ct4hers' => $data,
        ]);
        
    }
}
