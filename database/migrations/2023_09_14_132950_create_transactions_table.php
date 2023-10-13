<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('branch_id')->nullable();
            $table->unsignedBigInteger('cart_id')->nullable();
            $table->enum('status', ['ongoing', 'cancelled', 'completed']);
            $table->timestamp('date')->nullable();
            $table->double('paid_amount');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->foreign('branch_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('cart_id')->references('id')->on('carts')->onDelete('cascade');

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
        Schema::table('transactions', function (Blueprint $table) {
            $table->dropColumn('user_id');
            $table->dropColumn('total');
            $table->dropColumn('status');
            $table->dropColumn('branch_id');
            $table->dropColumn('cart_id');
            $table->dropColumn('paid_amount');
        });
    }
}
