<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('students', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('id_tp_doc')->unsigned();
      $table->integer('id_gender')->unsigned();
      $table->integer('identity_card')->unique();
      $table->string('name');
      $table->integer('phone');
      $table->string('email', 80);
      $table->date('birthdate');
      $table->timestamps();
      $table->foreign('id_tp_doc')->references('id')->on('tp_docs');
      $table->foreign('id_gender')->references('id')->on('genders');
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::drop('students');
  }
}
