<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidateSubmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_submissions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 255)->nullable(false);
            $table->string('surname', 255)->nullable(false);
            $table->string('phone', 255)->nullable(false);
            $table->string('email', 255)->nullable(false);
            $table->unsignedBigInteger('file')->nullable(false);
            $table->unsignedBigInteger('experience')->nullable(false);
            $table->unsignedBigInteger('skill')->nullable(false);
            $table->unsignedBigInteger('salary')->nullable(false);
            $table->longText('description')->nullable(false);
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('file')->references('id')->on('candidate_files')
                ->onUpdate('cascade');
            $table->foreign('experience')->references('id')->on('software_development_languages')
                ->onUpdate('cascade');
            $table->foreign('skill')->references('id')->on('software_developer_skills')
                ->onUpdate('cascade');
            $table->foreign('salary')->references('id')->on('expected_salaries')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidate_submissions');
    }
}
