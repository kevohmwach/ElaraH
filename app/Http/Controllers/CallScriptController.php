<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CallScript;
use App\Models\Patient;

class CallScriptController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function callScript($id,$acc_no){
        $data = Patient::find($id);
        // $method = 'register';

        if($data->account_no == $acc_no){
            //check whether user has Social History details set
            $callScriptData = CallScript::where('patient_id', $id)->first();
            if($callScriptData){
                $method = 'update';
            }else{
                $method = 'register';
            }
            
        }else{
            echo 'invalid user';
        }
        return view('callscript.callscript', [
            'method'=> $method,
            'patientdata' => $data,
        ]);
        
    }
}
