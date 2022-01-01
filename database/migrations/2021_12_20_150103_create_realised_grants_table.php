<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRealisedGrantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('realised_grants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('provider');
            $table->date('term');
            $table->integer('costs');
            $table->integer('support_amount');
            $table->integer('costs_without_partners');
            $table->boolean('close');
            $table->foreignId('user_id')->constrained();
            $table->foreignId('project_id')->constrained();
            $table->foreignId('role_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('realised_grants');
    }
}
