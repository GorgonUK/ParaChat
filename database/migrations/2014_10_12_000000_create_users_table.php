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
            $table->increments('id')->start_from(100)->index();;
            $table->foreignId('user_id')->nullable();
            $table->string('session')->nullable();
            $table->string('last_activity')->nullable();
            $table->string('name');
            $table->string('user_agent')->nullable();
            $table->string('updated_at');
            $table->string('created_at');
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
