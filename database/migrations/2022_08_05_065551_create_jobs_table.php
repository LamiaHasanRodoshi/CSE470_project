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
            $table->integer('user_id')->unique();
            $table->String('company_name')->unique();
            $table->String('title');
            $table->String('roles');
            $table->text('description');
            $table->integer('category_id');
            $table->String('position');
            $table->String('status');
            $table->text('address');
            $table->String('type');
            $table->timestamps();
            // $table->foreign('company_name')->references('c_name')->on('companies')->onDelete('cascade');
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
