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
            $table->string('firstname');
            $table->string('lasttname');
            $table->string('username');
            $table->string('email',50)->unique();
            $table->enum('status', ['active', 'inactive']);
            $table->unsignedBigInteger('role_id')->nullable();
            $table->string('password');
            $table->string('address',200)->nullable();
            $table->string('phone_number',200)->nullable();
            $table->string('image', 200)->nullable();
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
