<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('account_no');
            $table->string('fname');
            $table->string('lname');
            $table->string('birth_date');
            $table->string('gender');
            $table->string('address');
            $table->string('address_code');
            $table->string('county');
            $table->string('mobile_contact');
            $table->string('alt_contact');
            $table->integer('id_no');
            $table->string('email');
            $table->string('ethinicity');
            $table->double('weight');
            $table->double('height');
            $table->string('language');
            $table->string('other_language')->nullable();
            $table->string('marital');
            $table->string('spouse_name');
            $table->string('spouse_phone');
            $table->string('emergency_contact_name');
            $table->string('emergency_contact_rel');
            $table->string('emergency_contact_email');
            $table->string('emergency_contact_mobile');
            $table->string('emergency_contact_alt_mobile');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient');
    }
};
