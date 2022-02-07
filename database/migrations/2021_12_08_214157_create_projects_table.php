<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->integer('project_number');
            $table->string('name');
            $table->string('shortcut');
            $table->string('region');
            $table->date('year');
            $table->integer('time');
            $table->date('from');
            $table->date('to');
            $table->integer('type');
            $table->integer('cost');
            $table->integer('own_sources');
            $table->integer('support_amount');
            $table->string('provider');
            $table->foreignId('data_description_id')->constrained('data_descriptions');
            $table->foreignId('project_description_id')->constrained('project_descriptions');
            $table->foreignId('contact_person_id')->constrained('contact_people');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
