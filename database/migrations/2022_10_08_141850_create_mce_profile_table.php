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
        Schema::create('mce_profile', function (Blueprint $table) {
            $table->id('mce_profile_id');
            $table->integer('user_id');
            $table->string('full_name');
            $table->integer('designation_id');
            $table->integer('city_id');
            $table->string('mce_profile_image');
            $table->string('about_me');
            $table->string('email');
            $table->string('mobile');
            $table->string('address');
            $table->string('department');
            $table->string('from_year');
            $table->string('location');
            $table->integer('degree_id');
            $table->string('major');
            $table->string('institute');
            $table->string('completion_year');
            $table->enum('status',['Approved','Pending','Rejected'])->default('Pending');
            $table->string('review')->nullable();
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
        Schema::dropIfExists('mce_profile');
    }
};
