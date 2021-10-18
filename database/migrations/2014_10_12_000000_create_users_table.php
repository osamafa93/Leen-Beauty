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

            $table->string('fathername');
            $table->string('lastname');
            $table->string('notification_number');
            $table->string('city');
            $table->string('branch');
            $table->string('mobile');
            $table->string('product');
            $table->integer('quantity')->nullable();
            $table->integer('price')->nullable();
            $table->integer('total')->nullable();
            $table->string('ready')->nullable();
            $table->string('shipped')->nullable();
            $table->string('received')->nullable();


            $table->string('product2')->nullable();
            $table->integer('quantity2')->nullable();
            $table->integer('price2')->nullable();

            $table->string('product3')->nullable();
            $table->integer('quantity3')->nullable();
            $table->integer('price3')->nullable();

            $table->string('product4')->nullable();
            $table->integer('quantity4')->nullable();
            $table->integer('price4')->nullable();

            $table->string('product5')->nullable();
            $table->integer('quantity5')->nullable();
            $table->integer('price5')->nullable();

            $table->string('product6')->nullable();
            $table->integer('quantity6')->nullable();
            $table->integer('price6')->nullable();

            $table->string('product7')->nullable();
            $table->integer('quantity7')->nullable();
            $table->integer('price7')->nullable();

            $table->string('usertype')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
