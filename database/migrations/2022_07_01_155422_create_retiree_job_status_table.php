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
        Schema::create('retiree_job_status', function (Blueprint $table) {
            $table->id();
            
            $table->string('Applying job');
            $table->string('Approved job');
            $table->string('Rejected job');
            $table->text('Feedback of each Jobs');
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
        Schema::dropIfExists('retiree_job_status');
    }
};
