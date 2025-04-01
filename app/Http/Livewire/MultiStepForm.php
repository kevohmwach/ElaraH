<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Patient;

class MultiStepForm extends Component
{
    use WithFileUploads;

    public $fname;
    public $lname;
    public $birth_date;
    public $gender;
    public $address;
    public $address_code;
    public $county;
    public $phone;
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

    public $totalSteps = 2;
    public $currentStep = 1;
    public $lastEntry_id;

    public function mount(){
        $this->currentStep = 1;
    }

    
    
    public function render()
    {
        return view('livewire.multi-step-form');
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
                'language'=>'required|array',
                'other_language'=>'',
                'marital'=>'required|string',
                'spouse_name'=>'required|string',
                'spouse_phone'=>'required|string',
            ]);
        }
        elseif($this->currentStep == 2){
            $this->validate([
                'emergency_contact_name'=>'required|string',
                'emergency_contact_rel'=>'required|string',
                'emergency_contact_email'=>'required|string',
                'emergency_contact_mobile'=>'required|string',
                'emergency_contact_alt_mobile'=>'required|string',
            ]);
      }
    }



    public function register(){
        $lastID=0;
        $lastEntry = Patient::latest()->limit(1)->get()->toArray();
        if($lastEntry){
            $lastID=$lastEntry[0]['id'];
        }

        $data = array(
            "account_no"=>"ELH-".str_pad(++$lastID, 4, '0', STR_PAD_LEFT),
            "fname"=>$this->fname,
            "lname"=>$this->lname,
            "birth_date"=>$this->birth_date,
            "gender"=>$this->gender,
            "address"=>$this->address,
            "address_code"=>$this->address_code,
            "county"=>$this->county,
            "mobile_contact"=>$this->mobile_contact,
            "alt_contact"=>$this->alt_contact,
            "id_no"=>$this->id_no,
            "email"=>$this->email,
            "ethinicity"=>$this->ethinicity,
            "weight"=>$this->weight,
            "height"=>$this->height,
            "language"=>json_encode($this->language),
            "other_language"=>$this->other_language,
            "marital"=>$this->marital,
            "spouse_name"=>$this->spouse_name,
            "spouse_phone"=>$this->spouse_phone,
            "emergency_contact_name"=>$this->emergency_contact_name,
            "emergency_contact_rel"=>$this->emergency_contact_rel,
            "emergency_contact_email"=>$this->emergency_contact_email,
            "emergency_contact_mobile"=>$this->emergency_contact_mobile,
            "emergency_contact_alt_mobile"=>$this->emergency_contact_alt_mobile
        );

        auth()->user()->patient()->create($data);
        $this->reset();
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
