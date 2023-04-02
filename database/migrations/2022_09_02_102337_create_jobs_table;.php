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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id(); 
            $table->string('job_title');
            $table->longText('required_skills')->nullable();
            $table->string('department');
            $table->enum('job_category',["Private","Government"]);
            $table->string('qualification');
            $table->string('experience')->nullable();
            $table->string('location')->nullable();
            $table->string('age_limit');
            $table->string('vacancies')->nullable()->default('N/A');
            $table->date('posted_on');
            $table->date('last_date');
            $table->string('advertisement')->nullable();
            $table->enum('status', ["Active","InActive"]);
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
        Schema::dropIfExists('jobs');
    }
};
