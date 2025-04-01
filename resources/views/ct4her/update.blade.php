@extends('layouts.app')

@section('content')

<div class="wrapper">

    <div >
        @livewire('ct4her-form-update', [$ct4herdata->id] )
    </div>

</div>

@endsection