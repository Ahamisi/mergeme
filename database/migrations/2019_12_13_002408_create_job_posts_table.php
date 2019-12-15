<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('posted_by_id');
            $table->integer('job_type_id');
            $table->text('job_heading');
            $table->text('job_description');
            $table->string('job_location');
            $table->string('pay')->nullable();
            $table->string('is_active');
            $table->string('company_id')->nullable();
            $table->string('is_company_name_hidden')->nullable();
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
        Schema::dropIfExists('job_posts');
    }
}
