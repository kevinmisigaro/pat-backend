<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('mct_number')->nullable();
            $table->string('gender');
            $table->string('dob');
            $table->string('title')->nullable();
            $table->foreignId('country_id')->constrained();
            $table->foreignId('theme_id')->nullable()->constrained();
            $table->string('document')->nullable();
            $table->string('phone');
            $table->boolean('payed')->default(false);
            $table->string('affiliation')->nullable();
            $table->string('additional_affiliation')->nullable();
            $table->string('coauthor')->nullable();
            $table->integer('application_reason'); //1-->applicant, 2-->coming
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
        Schema::dropIfExists('applicants');
    }
}
