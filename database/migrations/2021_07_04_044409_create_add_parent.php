<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddParent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_parent', function (Blueprint $table) {
            $table->id();
            $table->integer('id_parent')->nullable();
            $table->string('fname', 100)->nullable();
            $table->string('lname', 100)->nullable();
           
            $table->string('gender', 50)->nullable();
            $table->string('occupation', 100)->nullable();
            $table->string('blood_grp', 25)->nullable();
            $table->string('religion', 50)->nullable();
            $table->string('email', 150)->nullable();
            $table->string('address', 255)->nullable();
            $table->string('phone')->nullable();
            $table->string('picture', 255)->nullable();
            $table->string('message', 255)->nullable();

            
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
        Schema::dropIfExists('add_parent');
    }
}
