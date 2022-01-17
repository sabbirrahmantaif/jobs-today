<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
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
            $table->string('position')->nullable();
            $table->bigInteger('company_id')->unsigned();
            $table->string('location')->nullable();
            $table->string('title')->nullable();
            $table->string('category')->nullable();
            $table->string('vacancy')->nullable();
            $table->string('deadline')->nullable();
            $table->string('salary')->nullable();
            $table->string('description')->nullable();
            $table->string('nature')->nullable();
            $table->string('education')->nullable();
            $table->string('experience')->nullable();
            $table->string('requirements')->nullable();
            $table->string('other_benefits')->nullable();
            $table->timestamps();

            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
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
}
