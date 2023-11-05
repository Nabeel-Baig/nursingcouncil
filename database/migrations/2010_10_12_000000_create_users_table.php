<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('password')->nullable();
            //addition
            $table->string('lead_country')->nullable();
            $table->string('lead_state')->nullable();
            $table->string('lead_city')->nullable();
            $table->string('lead_company')->nullable();
            $table->string('lead_website')->nullable();
            $table->bigInteger('brand_id')->unsigned();
            $table->foreignId('user_id')->nullable()->references('id')->on('users')->onDelete('Cascade');
            $table->foreignId('lead_assigned_id')->nullable()->references('id')->on('users')->onDelete('cascade');
            $table->string('resource_comment')->nullable();
            $table->string('admin_comment')->nullable();
            $table->enum('lead_type',['0','1','2'])->nullable()->comment('0 for unpaid , 1 for paid , 2 for new leads');
            // $table->foreign('brand_id')->references('id')->on('brands');
            //addition
            $table->date('dob')->nullable();
            $table->enum('gender',['Male','Female'])->default('Male');
            $table->string('avatar')->default('assets/images/users/avatar-2.jpg');
            $table->enum('theme',['dark','light'])->default('light');
            $table->enum('lead_status',['Unpaid','Paid'])->nullable();
            $table->enum('lead_stage',['Trying to Connect','Talking','Considering','Onboard','Lost','Idle','Invalid'])->nullable();
            $table->string('two_factor_code')->nullable();
            $table->dateTime('two_factor_expires_at')->nullable();
            $table->boolean('is_authenticate')->default(false);
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
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
