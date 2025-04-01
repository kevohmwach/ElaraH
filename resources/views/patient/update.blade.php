@extends('layouts.app')

@section('content')

<div class="wrapper-updateblade">
    <div class="forms_updateblade">
        <div class="form_buttons_update">
            <button type="button" class="btn btn-md btn-secondary">
                <a class="links" href="{{route('updatePatient', ['id'=>$patientdata->id] )}}" >Patient Intake Form</a>
            </button>
            
        </div>
        <div class="form_buttons_update">
            <button type="button" class="btn btn-md btn-success">
                <a class="links" href="{{route('cancerPatient', ['id'=>$patientdata->id,'acc_no'=>$patientdata->account_no] )}}">Cancer Diagnosis</a>
            </button>
            
        </div>
        <div class="form_buttons_update">
            <button type="button" class="btn btn-md btn-secondary">
                <a class="links" href="{{route('medical_history', ['id'=>$patientdata->id,'acc_no'=>$patientdata->account_no] )}}">Medical History</a>
            </button>
            
        </div>
        <div class="form_buttons_update">
            <button type="button" class="btn btn-md btn-success">
                <a class="links" href="{{route('social_history', ['id'=>$patientdata->id,'acc_no'=>$patientdata->account_no] )}}">Social History</a>
            </button>
            
        </div>
        <div class="form_buttons_update">
            <button type="button" class="btn btn-md btn-secondary">
                <a class="links" href="{{route('call_script', ['id'=>$patientdata->id,'acc_no'=>$patientdata->account_no] )}}">Call Script Form</a>
            </button>
            
        </div>
    </div>
    <div class="client_info_updateform">
        @livewire('multi-step-form-update', [$patientdata->id] )
    </div>
   

</div>
@endsection