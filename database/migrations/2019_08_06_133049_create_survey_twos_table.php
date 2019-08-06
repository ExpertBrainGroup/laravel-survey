<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveyTwosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey_twos', function (Blueprint $table) {
            $table->bigIncrements('id');
            // DO YOU THINK WAVESYS HAS THE POTENTIAL TO BUILD A TRUST RELATIONSHIP WITH YOU ?
            $table->enum('trustRelationship', ['yes', 'to-early']);
            // OUR TEAM EFFECTIVELY COORDINATES RESOURCES TO FULFIL YOUR TRANSPORTATION REQUIREMENTS ?
            $table->enum('cordination', ['yes', 'sometimes']);
            // TIMELINESS AND ADEQUACY OF OUR BUSINESS OPERATIONS TO YOUR REQUEST ?
            $table->enum('timeliness', ['perfect', 'less-than-perfect']);
            // WERE YOU HAPPY WITH OUR SCHEDULE OR THE TRANSIT TIMES ?
            $table->enum('schedule', ['yes', 'no']);
            // EFFECTIVENESS OF FREIGHT LOSS, DAMAGE PREVENTION, AND DAMAGE CLAIMS SERVICES ?
            $table->enum('damagePrevention', ['great', 'cannot-say']);
            // USEFULNESS OF WEB-BASED TOOLS PROVIDED BY WAVESYS ?
            $table->enum('webBasedTools', ['very-useful', 'never-used']);
            // IN THE LAST 12 MONTHS, HOW SATISFIED HAVE YOU BEEN WITH WAVESYS OVERALL PERFORMANCE IN THIS AREA ?
            $table->enum('overallPerformance', ['very-satisfied', 'nothing-much']);
            // ANY OF YOUR SUGGESTIONS TO HELP US PERFORM BETTER ?
            $table->string('suggestions'); 
            $table->timestamps();
        });

        Schema::table('survey_twos', function($table)
        {
            $table->string('email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('survey_twos');
    }
}
