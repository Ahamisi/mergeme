<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username')->unique()->nullable();
            $table->string('f_name');
            $table->string('l_name');
            $table->string('gender');
            $table->string('contact_int');
            $table->integer('user_type_id')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('is_active')->default('yes');
            $table->string('email')->unique();
            $table->string('password');
            $table->char('sms_notification_active')->nullable();
            $table->char('email_notification_active')->nullable();
            $table->string('user_image')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
