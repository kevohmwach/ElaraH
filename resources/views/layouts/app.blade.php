<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link href="{{ asset('assets/css/site.css') }}" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    @livewireStyles

    <style>
        *,body{
            padding: 0px;
            margin: 0px;
            box-sizing: border-box;
        }
        .links{
            text-decoration: none;
            color:white;
        }
        .wrapper{
            width: 70%;
            margin: auto;
            border: 1px solid green;
            border-radius: 5px;
            padding: 10px 20px;
            
        }
        .wrapper-updateblade{
            width: 90%;
            margin: auto;
            border: 1px solid green;
            border-radius: 5px;
            padding: 10px 20px;
            display: flex;
            
        }
        .forms_updateblade{
            width: 20%;
            border-right: 1px solid green;
            padding: 20px
        }
        .client_info_updateform{
            width: 80%;
        }

        .column_1, .column_2 {
            width: 40%
    
        }
        .column_3{
            width: 20%
        }
        .form_title{
            margin: auto;
            text-align: center;
        }
        .sectionTitle{
            color: #45a049;
        }
    
        input[type=text], input[type=email], input[type=date], input[type=number], .dropdown {
            width: 100%;
            padding: 10px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
    
        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    
        input[type=submit]:hover {
            background-color: #45a049;
        }
        .non_textInputs{
            margin-bottom: 5px;
            box-sizing: border-box;
        }
        .row_entry{
            display: flex;
        }
        .row_entry > div{
            width: 50%;
            padding-right: 30px;
        }
        .single_item{
            display: block;
        }
        .single_item > div{
            width: 100%;
        }
        .steps{
            font-weight: bold;
            text-align: center;
            padding: 5px;
            background-color: green;
        }
        .step-one, .step-two {
            padding: 20px;
        }
        .form_buttons_update{
            margin: 10px;
            /* width: 100%; */
        }
        .pain_descr, .surgery_history, .med_history{
            display: flex;
        }
        .pain_descr > div {
            width:25%;
        }
        .surgery_history > div {
            /* width:33%; */
            margin: 5px;
        }
        .surgery_Doctor, .surgery_location{
            width: 40%;
        }
        .surgery_year{
            width: 20%;
        }
        .subsection_heading{
            font-weight: bold;
            font-size: 15px;
           color: green;
        }
        .med_history > div {
            width:50%;
        }
       .med_history_diseases{
            display: flex;
            justify-content: space-between;
       }
       .med_history_diseases > div:last-child{
            padding-right: 40px;
       }
       .disease_spacing {
            padding-left: 40px;
       }
       .disease_spacing{
            margin-right: 20px;
       }
       
    
    
    </style>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{-- {{ config('app.name', 'Laravel') }} --}}
                    Elara Health Innovation
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"  data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                View Records
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="nav-link" href="{{route('patient')}}">Patients</a>
                                    <a class="nav-link" href="{{route('ct4her')}}">Facility/Physicians</a>
                                </div>
                            
                            </li>

                            
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"  data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   Intake Forms
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="nav-link" href="{{route('patient_register')}}">Patient Intake</a>
                                    <a class="nav-link" href="{{route('ct4her_register')}}">Facility/Physicians</a>
                                </div>
                               
                            </li>
                           










                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @livewireScripts
</body>
</html>
