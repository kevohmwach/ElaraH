<?php

namespace App\Http\Controllers;
use App\Models\Patient;
use App\Models\Cancer;
use App\Models\History;
use App\Models\SocialHistory;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $data = Patient::latest()->get()->toArray();
        //dd($promotion->id);
        return view('patient.index', [
            'patients' => $data,
        ]);
        
    }
    public function register() { 
        return view ('patient.register');
    }

    public function update($id){
        $data = Patient::find($id);
        return view('patient.update', [
            'patientdata' => $data,
        ]);
        
    }

    public function cancer($id,$acc_no){
        $data = Patient::find($id);
        //$method = 'register';

        if($data->account_no == $acc_no){
            //check whether user has cancer details set
            $cancerData = Cancer::where('patient_id', $id)->first();
            if($cancerData){
                $method = 'update';
            }else{
                $method = 'register';
            }
            
        }else{
            echo 'invalid user';
        }
        return view('patient.cancer', [
            'method'=> $method,
            'patientdata' => $data,
        ]);
        
    }
    public function medicalhistory($id,$acc_no){
        $data = Patient::find($id);

        if($data->account_no == $acc_no){
            //check whether user has Medical History details set
            $medicalHistoryData = History::where('patient_id', $id)->first();
            if($medicalHistoryData){
                $method = 'update';
            }else{
                $method = 'register';
            }
            
        }else{
            echo 'invalid user';
        }
        return view('patient.medicalhistory', [
            'method'=> $method,
            'patientdata' => $data,
        ]);
        
    }
    public function socialhistory($id,$acc_no){
        $data = Patient::find($id);

        if($data->account_no == $acc_no){
            //check whether user has Social History details set
            $sociallHistoryData = SocialHistory::where('patient_id', $id)->first();
            if($sociallHistoryData){
                $method = 'update';
            }else{
                $method = 'register';
            }
            
        }else{
            echo 'invalid user';
        }
        return view('patient.socialhistory', [
            'method'=> $method,
            'patientdata' => $data,
        ]);
        
    }
    public function download(){
        $data = Patient::latest()->get()->toArray();
        return view('patient.download', [
            'patients' => $data,
        ]);
        
    }

}
