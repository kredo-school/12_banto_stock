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

            // statusカラムが存在しない場合のみ追加
            if (!Schema::hasColumn('users', 'status')) {
                $table->enum('status', ['active', 'inactive'])->after('password')->default('active');
            }

            // From AddColumnsToUsersTable migration
            $table->string('username');
            //$table->enum('status', ['active', 'inactive'])->after('password')->default('active');
            $table->foreignId('role_id')->nullable()->constrained()->after('status');
            $table->string('address')->after('role_id')->nullable();
            $table->longText('image')->nullable();
            
            // From AddNewColumnsToUsersTable migration
            $table->foreignId('branch_id')->nullable()->constrained()->after('role_id');
            $table->integer('employee_number')->nullable();
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->timestamp('birthdate')->nullable();
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
            $table->dropColumn([
                'username',
                'status',
                'address',
                'image',
                'employee_number',
                'gender',
                'birthdate',
                'role_id',
                'branch_id',
            ]);

            $table->dropForeign(['role_id']);
            $table->dropForeign(['branch_id']);
           
        });
    }
}
