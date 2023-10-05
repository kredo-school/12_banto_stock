<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('username')->after('name');
            $table->enum('status', ['active', 'inactive'])->after('password')->default('active');
            $table->foreignId('role_id')->constrained()->after('status')->nullable();
            $table->string('address')->after('role_id')->nullable();
            $table->string('phone_number')->after('address')->nullable();
            $table->longText('image')->after('phone_number')->nullable();

        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('username');
            $table->dropColumn('status');
            $table->dropColumn('role_id');
            $table->dropColumn('address');
            $table->dropColumn('phone_number');
            $table->dropColumn('image');

            $table->dropForeign(['role_id']);
        });
    }
}
