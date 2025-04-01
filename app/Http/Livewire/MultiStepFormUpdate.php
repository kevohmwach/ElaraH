<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Patient;

class MultiStepFormUpdate extends Component
{
    
    use WithFileUploads;

    //public Patient $patientdata;
    public $patient;
    public $patientId;
    //public $patientdata;

    public $fname;
    public $lname;
    public $birth_date;
    public $gender;
    public $address;
    public $address_code;
    public $county;
    public $mobile_contact;
    public $alt_contact;
    public $id_no;
    public $email;
    public $ethinicity;
    public $weight;
    public $height;
    public $language = [];
    public $other_language;
    public $marital;
    public $spouse_name;
    public $spouse_phone;
    public $emergency_contact_name;
    public $emergency_contact_rel;
    public $emergency_contact_email;
    public $emergency_contact_mobile;
    public $emergency_contact_alt_mobile;

    public $totalSteps = 3;
    public $currentStep = 1;

    public function mount($patient_id){
        $this->currentStep = 1;
        $this->patientId = $patient_id;
        $this->patient = Patient::find($patient_id);

        $this->fname = $this->patient->fname;
        $this->lname = $this->patient->lname;
        $this->birth_date = $this->patient->birth_date;
        $this->gender = $this->patient->gender;
        $this->address = $this->patient->address;
        $this->address_code = $this->patient->address_code;
        $this->county = $this->patient->county;
        $this->mobile_contact = $this->patient->mobile_contact;
        $this->alt_contact = $this->patient->alt_contact;
        $this->id_no = $this->patient->id_no;
        $this->email = $this->patient->email;
        $this->ethinicity = $this->patient->ethinicity;
        $this->weight = $this->patient->weight;
        $this->height = $this->patient->height;
        $this->language = $this->patient->language;
        $this->other_language = $this->patient->other_language;
        $this->marital = $this->patient->marital;
        $this->spouse_name = $this->patient->spouse_name;
        $this->spouse_phone = $this->patient->spouse_phone;
        $this->emergency_contact_name = $this->patient->emergency_contact_name;
        $this->emergency_contact_rel = $this->patient->emergency_contact_rel;
        $this->emergency_contact_email = $this->patient->emergency_contact_email;
        $this->emergency_contact_mobile = $this->patient->emergency_contact_mobile;
        $this->emergency_contact_alt_mobile = $this->patient->emergency_contact_alt_mobile;

    }
    
    public function render()
    {
        return view('livewire.multi-step-form-update');
    }

    public function increaseStep(){
        $this->resetErrorBag();
        $this->validateData();
         $this->currentStep++;
         if($this->currentStep > $this->totalSteps){
             $this->currentStep = $this->totalSteps;
         }
    }

    public function decreaseStep(){
        $this->resetErrorBag();
        $this->currentStep--;
        if($this->currentStep < 1){
            $this->currentStep = 1;
        }
    }

    public function validateData(){

        if($this->currentStep == 1){
            $this->validate([
                'fname'=>'required|string',
                'lname'=>'required|string',
                'birth_date'=>'required|date',
                'gender'=>'required|string',
                'address'=>'required|string',
                'address_code'=>'required|string',
                'county'=>'required|string',
                'mobile_contact'=>'required|string',
                'alt_contact'=>'required|string',
                'id_no'=>'required|numeric',
                'email'=>'required|string',
                'ethinicity'=>'required|string',
                'weight'=>'required|numeric',
                'height'=>'required|numeric',
                'language'=>'required',
                'other_language'=>'',
                'marital'=>'required|string',
                'spouse_name'=>'required|string',
                'spouse_phone'=>'required|string',
            ]);
        }
        else if($this->currentStep == 2){
            $this->validate([
                'emergency_contact_name'=>'required|string',
                'emergency_contact_rel'=>'required|string',
                'emergency_contact_email'=>'required|string',
                'emergency_contact_mobile'=>'required|string',
                'emergency_contact_alt_mobile'=>'required|string',
            ]);
      }
    }



    public function update(){
        $patientData = Patient::find($this->patientId);
        $patientData->fname =$this->fname;
        $patientData->lname = $this->lname;
        $patientData->birth_date = $this->birth_date;
        $patientData->gender = $this->gender;
        $patientData->address = $this->address;
        $patientData->address_code = $this->address_code;
        $patientData->county = $this->county;
        $patientData->mobile_contact = $this->mobile_contact;
        $patientData->alt_contact = $this->alt_contact;
        $patientData->id_no = $this->id_no;
        $patientData->email = $this->email;
        $patientData->ethinicity = $this->ethinicity;
        $patientData->weight = $this->weight;
        $patientData->height = $this->height;
        $patientData->language = $this->language;
        $patientData->other_language = $this->other_language;
        $patientData->marital = $this->marital;
        $patientData->spouse_name = $this->spouse_name;
        $patientData->spouse_phone = $this->spouse_phone;
        $patientData->emergency_contact_name = $this->emergency_contact_name;
        $patientData->emergency_contact_rel = $this->emergency_contact_rel;
        $patientData->emergency_contact_email = $this->emergency_contact_email;
        $patientData->emergency_contact_mobile = $this->emergency_contact_mobile;
        $patientData->emergency_contact_alt_mobile = $this->emergency_contact_alt_mobile;

        $patientData->save();

        // $this->reset();
        $this->currentStep = 1;

    }

    public function checkInput($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data, ENT_QUOTES);
        return $data;
    }
    public function sanitizeString($dataString){
        if (filter_var($dataString, FILTER_SANITIZE_STRING)!== false) {
            return $dataString;
        }
    }
}
