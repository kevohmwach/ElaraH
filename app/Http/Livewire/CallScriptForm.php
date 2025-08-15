<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\CallScript;

class CallScriptForm extends Component
{
    use WithFileUploads;

    public $patient_response_salutation;
    public $patient_response_busy;
    public $script_question_1;
    public $patient_response_1;
    public $script_question_2;
    public $patient_response_2;
    public $script_question_3;
    public $patient_response_3;
    public $script_question_4;
    public $patient_response_4;
    public $script_question_5;
    public $patient_response_5;
    public $patient_response_wrap_advice;
    public $patient_response_wrap_bye;
    public $weekly_check_in_quiz_1;
    public $weekly_check_in_response_1;
    public $weekly_check_in_quiz_2;
    public $weekly_check_in_response_2;
    public $weekly_check_in_quiz_3;
    public $weekly_check_in_response_3;
    public $weekly_check_in_quiz_4;
    public $weekly_check_in_response_4;
    public $weekly_check_in_quiz_5;
    public $weekly_check_in_response_5;
    public $weekly_check_in_quiz_6;
    public $weekly_check_in_response_6;
    public $weekly_check_in_quiz_7;
    public $weekly_check_in_response_7;
    public $patient_response_wrap_advice_weekly;
    public $patient_response_wrap_bye_weekly;

    
    public $totalSteps = 3;
    public $currentStep = 1;
    public $method;
    public $patient_id;
    public $patient;
    public $response_data;
    public $patient_name;

    //$questions = 


    public function mount($method, $patient_id, $patient_name, $response_data){
        $this->currentStep = 1;
        $this->method = $method;
        $this->patient_id = $patient_id;
        $this->response_data = $response_data;
        $this->patient_name = $patient_name;

        $this->script_question_1 = "First off, how have you been feeling since starting Enhertu? Anything new or different?";
        $this->script_question_2 = "Any side effects you’ve noticed? Things like nausea, fatigue, or anything else?";
        $this->script_question_3 = "Specifically, have you had any trouble with breathing, coughing, or feeling short of breath?";
        $this->script_question_4 = "If yes: How severe would you say it is? Mild, moderate, or really bothering you?";
        $this->script_question_5 = "Have you talked to your doctor about any of these symptoms?";
        $this->weekly_check_in_quiz_1 = "How have you been feeling since our last call? Any changes in how you’re feeling overall?";
        $this->weekly_check_in_quiz_2 = "Are you still taking Enhertu as prescribed? Any issues with the medication?";
        $this->weekly_check_in_quiz_3 = "Have you noticed any new or worsening side effects this week? Things like nausea, fatigue, or anything else?";
        $this->weekly_check_in_quiz_4 = "Specifically, have you had any trouble with breathing, coughing, or feeling short of breath? We’re keeping a close eye on those symptoms";
        $this->weekly_check_in_quiz_5 = "If yes: How severe would you say it is? Mild, moderate, or really bothering you?";
        $this->weekly_check_in_quiz_6 = "Have you had any recent visits with your doctor or healthcare provider? Any changes to your treatment plan?";
        $this->weekly_check_in_quiz_7 = "How’s your quality of life been this week? Any challenges or improvements you’d like to share?";

        if($method =='update'){
            $this->patient = CallScript::where('patient_id', $patient_id)->first();
            // dd($this->patient);
            if($this->patient){
                $this->patient_response_salutation = $this->patient->patient_response_salutation;
                $this->patient_response_busy = $this->patient->patient_response_busy;
                // $this->script_question_1 = $this->patient->script_question_1;
                $this->patient_response_1 = $this->patient->patient_response_1;
                // $this->script_question_2 = $this->patient->script_question_2;
                $this->patient_response_2 = $this->patient->patient_response_2;
                // $this->script_question_3 = $this->patient->script_question_3;
                $this->patient_response_3 = $this->patient->patient_response_3;
                // $this->script_question_4 = $this->patient->script_question_4;
                $this->patient_response_4 = $this->patient->patient_response_4;
                // $this->script_question_5 = $this->patient->script_question_5;
                $this->patient_response_5 = $this->patient->patient_response_5;
                $this->patient_response_wrap_advice = $this->patient->patient_response_wrap_advice;
                $this->patient_response_wrap_bye = $this->patient->patient_response_wrap_bye;
                // $this->weekly_check_in_quiz_1 = $this->patient->weekly_check_in_quiz_1;
                $this->weekly_check_in_response_1 = $this->patient->weekly_check_in_response_1;
                // $this->weekly_check_in_quiz_2 = $this->patient->weekly_check_in_quiz_2;
                $this->weekly_check_in_response_2 = $this->patient->weekly_check_in_response_2;
                // $this->weekly_check_in_quiz_3 = $this->patient->weekly_check_in_quiz_3;
                $this->weekly_check_in_response_3 = $this->patient->weekly_check_in_response_3;
                // $this->weekly_check_in_quiz_4 = $this->patient->weekly_check_in_quiz_4;
                $this->weekly_check_in_response_4 = $this->patient->weekly_check_in_response_4;
                // $this->weekly_check_in_quiz_5 = $this->patient->weekly_check_in_quiz_5;
                $this->weekly_check_in_response_5 = $this->patient->weekly_check_in_response_5;
                // $this->weekly_check_in_quiz_6 = $this->patient->weekly_check_in_quiz_6;
                $this->weekly_check_in_response_6 = $this->patient->weekly_check_in_response_6;
                // $this->weekly_check_in_quiz_7 = $this->patient->weekly_check_in_quiz_7;
                $this->weekly_check_in_response_7 = $this->patient->weekly_check_in_response_7;
                $this->patient_response_wrap_advice_weekly = $this->patient->patient_response_wrap_advice_weekly;
                $this->patient_response_wrap_bye_weekly = $this->patient->patient_response_wrap_bye_weekly;


            }
        }else if($method =='register'){
            // $this->script_question_1 = "First off, how have you been feeling since starting Enhertu? Anything new or different?";
            // $this->script_question_2 = "Any side effects you’ve noticed? Things like nausea, fatigue, or anything else?";
            // $this->script_question_3 = "Specifically, have you had any trouble with breathing, coughing, or feeling short of breath?";
            // $this->script_question_4 = "If yes: How severe would you say it is? Mild, moderate, or really bothering you?";
            // $this->script_question_5 = "Have you talked to your doctor about any of these symptoms?";
            // $this->weekly_check_in_quiz_1 = "How have you been feeling since our last call? Any changes in how you’re feeling overall?";
            // $this->weekly_check_in_quiz_2 = "Are you still taking Enhertu as prescribed? Any issues with the medication?";
            // $this->weekly_check_in_quiz_3 = "Have you noticed any new or worsening side effects this week? Things like nausea, fatigue, or anything else?";
            // $this->weekly_check_in_quiz_4 = "Specifically, have you had any trouble with breathing, coughing, or feeling short of breath? We’re keeping a close eye on those symptoms";
            // $this->weekly_check_in_quiz_5 = "If yes: How severe would you say it is? Mild, moderate, or really bothering you?";
            // $this->weekly_check_in_quiz_6 = "Have you had any recent visits with your doctor or healthcare provider? Any changes to your treatment plan?";
            // $this->weekly_check_in_quiz_7 = "How’s your quality of life been this week? Any challenges or improvements you’d like to share?";

        }
    }

    public function render()
    {
        return view('livewire.call-script-form');
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
                'patient_response_salutation'=>'',
                'patient_response_busy'=>'',
                'script_question_1'=>'',
                'patient_response_1'=>'',
                'script_question_2'=>'',
                'patient_response_2'=>'',
                'script_question_3'=>'',
                'patient_response_3'=>'',
                'script_question_4'=>'',
                'patient_response_4'=>'',
                'script_question_5'=>'',
                'patient_response_5'=>'',
                'patient_response_wrap_advice'=>'',
                'patient_response_wrap_bye'=>'',
            ]);
        }
        else if($this->currentStep == 2){
            $this->validate([
                'weekly_check_in_quiz_1'=>'',
                'weekly_check_in_response_1'=>'',
                'weekly_check_in_quiz_2'=>'',
                'weekly_check_in_response_2'=>'',
                'weekly_check_in_quiz_3'=>'',
                'weekly_check_in_response_3'=>'',
                'weekly_check_in_quiz_4'=>'',
                'weekly_check_in_response_4'=>'',
                'weekly_check_in_quiz_5'=>'',
                'weekly_check_in_response_5'=>'',
                'weekly_check_in_quiz_6'=>'',
                'weekly_check_in_response_6'=>'',
                'weekly_check_in_quiz_7'=>'',
                'weekly_check_in_response_7'=>'',
            ]);
      }
      else if($this->currentStep == 3){
            $this->validate([
                'patient_response_wrap_advice_weekly'=>'',
                'patient_response_wrap_bye_weekly'=>'',
            ]);
        }

    }



    public function register(){
       
        $data = array(
            'patient_id'=>$this->patient_id,
            'patient_response_salutation' =>$this->patient_response_salutation,
            'patient_response_busy' =>$this->patient_response_busy,
            'script_question_1' =>$this->script_question_1,
            'patient_response_1' =>$this->patient_response_1,
            'script_question_2' =>$this->script_question_2,
            'patient_response_2' =>$this->patient_response_2,
            'script_question_3' =>$this->script_question_3,
            'patient_response_3' =>$this->patient_response_3,
            'script_question_4' =>$this->script_question_4,
            'patient_response_4' =>$this->patient_response_4,
            'script_question_5' =>$this->script_question_5,
            'patient_response_5' =>$this->patient_response_5,
            'patient_response_wrap_advice' =>$this->patient_response_wrap_advice,
            'patient_response_wrap_bye' =>$this->patient_response_wrap_bye,
            'weekly_check_in_quiz_1' =>$this->weekly_check_in_quiz_1,
            'weekly_check_in_response_1' =>$this->weekly_check_in_response_1,
            'weekly_check_in_quiz_2' =>$this->weekly_check_in_quiz_2,
            'weekly_check_in_response_2' =>$this->weekly_check_in_response_2,
            'weekly_check_in_quiz_3' =>$this->weekly_check_in_quiz_3,
            'weekly_check_in_response_3' =>$this->weekly_check_in_response_3,
            'weekly_check_in_quiz_4' =>$this->weekly_check_in_quiz_4,
            'weekly_check_in_response_4' =>$this->weekly_check_in_response_4,
            'weekly_check_in_quiz_5' =>$this->weekly_check_in_quiz_5,
            'weekly_check_in_response_5' =>$this->weekly_check_in_response_5,
            'weekly_check_in_quiz_6' =>$this->weekly_check_in_quiz_6,
            'weekly_check_in_response_6' =>$this->weekly_check_in_response_6,
            'weekly_check_in_quiz_7' =>$this->weekly_check_in_quiz_7,
            'weekly_check_in_response_7' =>$this->weekly_check_in_response_7,
            'patient_response_wrap_advice_weekly' =>$this->patient_response_wrap_advice_weekly,
            'patient_response_wrap_bye_weekly' =>$this->patient_response_wrap_bye_weekly,

        );

        auth()->user()->callscript()->create($data);
        //$this->reset();
        $this->currentStep = 1;

    }

    public function update(){
        //$patientData = CallScript::find($this->patient_id);
        $patientData = CallScript::where('patient_id', $this->patient_id)->first();
        if($patientData){
            $patientData->patient_response_salutation = $this->patient_response_salutation;
            $patientData->patient_response_busy = $this->patient_response_busy;
            $patientData->script_question_1 = $this->script_question_1;
            $patientData->patient_response_1 = $this->patient_response_1;
            $patientData->script_question_2 = $this->script_question_2;
            $patientData->patient_response_2 = $this->patient_response_2;
            $patientData->script_question_3 = $this->script_question_3;
            $patientData->patient_response_3 = $this->patient_response_3;
            $patientData->script_question_4 = $this->script_question_4;
            $patientData->patient_response_4 = $this->patient_response_4;
            $patientData->script_question_5 = $this->script_question_5;
            $patientData->patient_response_5 = $this->patient_response_5;
            $patientData->patient_response_wrap_advice = $this->patient_response_wrap_advice;
            $patientData->patient_response_wrap_bye = $this->patient_response_wrap_bye;
            $patientData->weekly_check_in_quiz_1 = $this->weekly_check_in_quiz_1;
            $patientData->weekly_check_in_response_1 = $this->weekly_check_in_response_1;
            $patientData->weekly_check_in_quiz_2 = $this->weekly_check_in_quiz_2;
            $patientData->weekly_check_in_response_2 = $this->weekly_check_in_response_2;
            $patientData->weekly_check_in_quiz_3 = $this->weekly_check_in_quiz_3;
            $patientData->weekly_check_in_response_3 = $this->weekly_check_in_response_3;
            $patientData->weekly_check_in_quiz_4 = $this->weekly_check_in_quiz_4;
            $patientData->weekly_check_in_response_4 = $this->weekly_check_in_response_4;
            $patientData->weekly_check_in_quiz_5 = $this->weekly_check_in_quiz_5;
            $patientData->weekly_check_in_response_5 = $this->weekly_check_in_response_5;
            $patientData->weekly_check_in_quiz_6 = $this->weekly_check_in_quiz_6;
            $patientData->weekly_check_in_response_6 = $this->weekly_check_in_response_6;
            $patientData->weekly_check_in_quiz_7 = $this->weekly_check_in_quiz_7;
            $patientData->weekly_check_in_response_7 = $this->weekly_check_in_response_7;
            $patientData->patient_response_wrap_advice_weekly = $this->patient_response_wrap_advice_weekly;
            $patientData->patient_response_wrap_bye_weekly = $this->patient_response_wrap_bye_weekly;


            $patientData->save();
            // $this->reset();
            $this->currentStep = 1;
        }
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
