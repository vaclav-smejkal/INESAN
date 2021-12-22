<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataDescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Sběr dat od (rok, měsíc - datum)
        //Sběr dat do (rok, měsíc - datum)
        //Data (checkbox)
        //Labely (checkbox)
        ///Syntax (checkbox)
        //Dotazník (checkbox)
        //Rešerše (checkbox)

        Schema::create('data_descriptions', function (Blueprint $table) {
            $table->id();
            $table->date('from');
            $table->date('to');
            $table->boolean('data');
            $table->boolean('label');
            $table->boolean('syntax');
            $table->boolean('questionnaire');
            $table->boolean('search');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_descriptions');
    }
}
