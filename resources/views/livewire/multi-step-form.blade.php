<form  wire:submit.prevent="register">
    @csrf

    <div class="form_title">
        <h3>PATIENT INTAKE FORM </h3>
        <p>
            <b><u>Disclaimer:</u></b> Thank you for the privilege to serve you. This form is used to collect information  
            about you that will help us provide you with the best care and will be used for internal 
            purposes  only. The information you supply is confidential and will be treated accordingly. 
        </p>
    </div>
    
    <div class="form_wrapper">
        @if ($currentStep == 1)
            <div class="step-one">
                <div class="steps  bg-secondary text-white">STEP ONE</div>
                <h4 class="sectionTitle" >PATIENT DETAILS</h4>
                <div class="personal_info">

                    <div class="row_entry">
                        <div>
                            <label for="fname">First Name</label><br>
                            <input type="text" name="fname" id="fname" wire:model="fname" >
                            <span class="text-danger">@error('fname'){{ $message }}@enderror</span>
                        </div>
                        <div>
                            <label for="lname">Last Name</label><br>
                            <input type="text" name="lname" id="lname"  wire:model="lname">
                            <span class="text-danger">@error('lname'){{ $message }}@enderror</span>
                        </div>
                    </div>

                    <div class="row_entry">
                        <div>
                            <label for="birth_date">Date of birth</label><br>
                            <input type="date" name="birth_date" id="birth_date"  wire:model="birth_date">
                            <span class="text-danger">@error('birth_date'){{ $message }}@enderror</span>
                        </div>
                        <div>
                            <label class="non_textInputs" for="gender">Gender</label><br>

                            <input type="radio" id="gender1" name="gender" value="Male"  wire:model="gender">
                            <label for="gender1">Male</label>&nbsp&nbsp&nbsp
                            <input type="radio" id="gender2" name="gender" value="Female"  wire:model="gender">
                            <label for="gender2">Female</label>&nbsp&nbsp&nbsp
                            <input type="radio" id="gender3" name="gender" value="Other"  wire:model="gender">
                            <label for="gender3">Other</label><br>
                            <span class="text-danger">@error('gender'){{ $message }}@enderror</span>
                            
                        </div>
                    </div>

                    <div class="row_entry">
                        <div>
                            <label for="address">Address</label><br>
                            <input type="text" name="address" id="address"  wire:model="address">
                            <span class="text-danger">@error('address'){{ $message }}@enderror</span>
                        </div>
                        <div>
                            <label for="address_code">Code</label><br>
                            <input type="text" name="address_code" id="address_code"  wire:model="address_code">
                            <span class="text-danger">@error('address_code'){{ $message }}@enderror</span>
                        </div>
                        
                    </div>
                    <div class="row_entry">
                        <div>
                            <label for="county">County</label><br>
                            <select class="dropdown" name="county" id="county"  wire:model="county">
                                <option value="Nairobi">Nairobi</option>
                                <option value="Kiambu">Kiambu</option>
                                <option value="Machakos">Machakos</option>
                                <option value="Vihiga">Vihiga</option>
                            </select>
                            <span class="text-danger">@error('county'){{ $message }}@enderror</span>
                        </div>

                        <div>
                            <label for="mobile_contact">Mobile Phone</label><br>
                            <input type="text" name="mobile_contact" id="mobile_contact"  wire:model="mobile_contact">
                            <span class="text-danger">@error('mobile_contact'){{ $message }}@enderror</span>
                        </div>
                        
                    </div>
                    <div class="row_entry">
                        <div>
                            <label for="alt_contact">Alternative Contact</label><br>
                            <input type="number" name="alt_contact" id="alt_contact"  wire:model="alt_contact">
                            <span class="text-danger">@error('alt_contact'){{ $message }}@enderror</span>
                        </div>
                        <div>
                            <label for="id_no">ID NO.</label><br>
                            <input type="number" name="id_no" id="id_no"  wire:model="id_no">
                            <span class="text-danger">@error('id_no'){{ $message }}@enderror</span>
                        </div>
                    </div>
                    <div class="row_entry">
                        <div>
                            <label for="email">Email Address</label><br>
                            <input type="email" name="email" id="email"  wire:model="email">
                            <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                        </div> 
                        <div>
                            <label for="ethinicity">Ethinicity/Race</label><br>
                            <input type="text" name="ethinicity" id="ethinicity"  wire:model="ethinicity">
                            <span class="text-danger">@error('ethinicity'){{ $message }}@enderror</span>
                        </div>
                    </div>
                    <div class="row_entry">
                        <div>
                            <label for="weight">Weight in Kgs</label><br>
                            <input type="number" step="any" name="weight" id="weight"  wire:model="weight">
                            <span class="text-danger">@error('weight'){{ $message }}@enderror</span>
                        </div> 
                        <div>
                            <label for="height">Height in Feet</label><br>
                            <input type="number" step="any" name="height" id="height"  wire:model="height">
                            <span class="text-danger">@error('height'){{ $message }}@enderror</span>
                        </div> 
                    </div>
                    <div class="row_entry">
                        <div>
                            <p>Primary Language</p>
                            <input type="checkbox" name="english" id="english" value="English"  wire:model="language">
                            <label for="english"> English</label><br>
                            <input type="checkbox" name="swahili" id="swahili" value="Swahili"  wire:model="language">
                            <label for="swahili">Swahili</label><br>
                            <span class="text-danger">@error('language'){{ $message }}@enderror</span>
                            
                        </div> 
                        <div>
                            <label for="other_language"> Other Language</label><br>
                            <input type="text" name="other_language" id="other_language"  wire:model="other_language" >
                            <span class="text-danger">@error('other_language'){{ $message }}@enderror</span>
                        </div> 
                    </div>
                    <div class="single_item">
                        <div>
                            <label class="non_textInputs" for="marital">Marital Status</label><br>
                            <input type="radio" id="single" name="marital" value="Single"  wire:model="marital">
                            <label for="single">Single</label>&nbsp&nbsp&nbsp
                            <input type="radio" id="married" name="marital" value="Married"  wire:model="marital">
                            <label for="married">Married</label>&nbsp&nbsp&nbsp
                            <input type="radio" id="divorced" name="marital" value="Divorced"  wire:model="marital">
                            <label for="divorced">Divorced</label>&nbsp&nbsp&nbsp
                            <input type="radio" id="seperated" name="marital" value="seperated"  wire:model="marital">
                            <label for="seperated">Seperated</label>&nbsp&nbsp&nbsp
                            <input type="radio" id="windowed" name="marital" value="windowed"  wire:model="marital">
                            <label for="windowed">Windowed</label>&nbsp&nbsp&nbsp <br>
                            <span class="text-danger">@error('marital'){{ $message }}@enderror</span>
                        </div> 
                    </div>
                    <div class="row_entry">
                        <div>
                            <label for="spouse_name">Spouse Name</label><br>
                            <input type="text"  name="spouse_name" id="spouse_name"  wire:model="spouse_name">
                            <span class="text-danger">@error('spouse_name'){{ $message }}@enderror</span>
                        </div> 
                        <div>
                            <label for="spouse_phone">Spouse Phone No.</label><br>
                            <input type="number" name="spouse_phone" id="spouse_phone"  wire:model="spouse_phone">
                            <span class="text-danger">@error('spouse_phone'){{ $message }}@enderror</span>
                        </div> 
                    </div>
                
                
                </div>
            </div>
        @endif

        @if ($currentStep == 2)
            <div class="step-two">
                <div class="steps bg-secondary text-white">STEP TWO</div>
                <h4 class="sectionTitle" >EMERGENCY CONTACT</h4>
            
                <div class="single_item">
                    <div>
                        <label for="emergency_contact_name">Emmergency Contact Name</label><br>
                        <input type="text"  name="emergency_contact_name" id="emergency_contact_name"  wire:model="emergency_contact_name">
                        <span class="text-danger">@error('emergency_contact_name'){{ $message }}@enderror</span>
                    </div> 
                </div>
                <div class="row_entry">
                    <div>
                        <label for="emergency_contact_rel">Emergency Contact Relationship</label><br>
                        <input type="text"  name="emergency_contact_rel" id="emergency_contact_rel"  wire:model="emergency_contact_rel">
                        <span class="text-danger">@error('emergency_contact_rel'){{ $message }}@enderror</span>
                    </div> 
                    <div>
                        <label for="emergency_contact_email">Emergency Contact Email</label><br>
                        <input type="email" name="emergency_contact_email" id="emergency_contact_email"  wire:model="emergency_contact_email">
                        <span class="text-danger">@error('emergency_contact_email'){{ $message }}@enderror</span>
                    </div> 
                </div>
                <div class="row_entry">
                    <div>
                        <label for="emergency_contact_mobile">Emergency Contact Phone</label><br>
                        <input type="number"  name="emergency_contact_mobile" id="emergency_contact_mobile"  wire:model="emergency_contact_mobile">
                        <span class="text-danger">@error('emergency_contact_mobile'){{ $message }}@enderror</span>
                    </div> 
                    <div>
                        <label for="emergency_contact_alt_mobile">Emergency Contact Alternative Mobile</label><br>
                        <input type="number" name="emergency_contact_alt_mobile" id="emergency_contact_alt_mobile"  wire:model="emergency_contact_alt_mobile">
                        <span class="text-danger">@error('emergency_contact_alt_mobile'){{ $message }}@enderror</span>
                    </div> 
                </div>
            
            </div>
        @endif


        {{-- ------------------Buttons------------------------- --}}

        
    </div>

    <div class="action-buttons d-flex justify-content-between bg-white pt-2 pb-2">

        {{-- <button type="button" class="btn btn-md btn-secondary">Previous</button>
        <button type="button" class="btn btn-md btn-primary" >Next</button>
        <button type="submit" class="btn btn-md btn-success" >Submit</button> --}}

        @if ($currentStep == 1)
                <div></div>
        @endif

        @if ($currentStep == 2 || $currentStep == 3 || $currentStep == 4)
            <button type="button" class="btn btn-md btn-secondary" wire:click="decreaseStep()">Previous</button>
        @endif
        
        @if ($currentStep == 1 || $currentStep == 50 || $currentStep == 3)
            <button type="button" class="btn btn-md btn-success" wire:click="increaseStep()">Next</button>
        @endif
        
        @if ($currentStep == 2)
            <button type="submit" class="btn btn-md btn-primary">Submit</button>
        @endif
    </div>

</form>