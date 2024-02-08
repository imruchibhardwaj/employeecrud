<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;



return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id('id');
            $table->string('name', 60);
            $table->string('email',100);
            $table->text('address');
            $table->string('passward');
            $table->string('city');
            $table->string('pin_code');
            $table->string('state');
            $table->timestamps();
        });
    }

   
};
