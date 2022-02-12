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
            $table->bigInteger('company_id')->unsigned();
            $table->bigInteger('title_id')->unsigned();
            $table->bigInteger('category_id')->unsigned();
            $table->string('position')->nullable();
            $table->integer('vacancy')->nullable();
            $table->string('deadline')->nullable();
            $table->string('salary')->nullable();
            $table->longText('description')->nullable();
            $table->string('nature')->nullable();
            $table->text('education')->nullable();
            $table->string('experience')->nullable();
            $table->text('requirements')->nullable();
            $table->longText('other_benefits')->nullable();
            $table->boolean('status')->default(false);
            $table->timestamps();

            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
            $table->foreign('title_id')->references('id')->on('titles')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
