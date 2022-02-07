<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConversationsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    if (!Schema::hasTable('conversations')) {
      Schema::create('conversations', function (Blueprint $table) {
        $table->bigIncrements('id');
        
        // user
        $table->unsignedBigInteger('user_id');
        $table->foreign('user_id')->references('id')->on('users');
        // contact
        $table->unsignedBigInteger('contact_id');
        $table->foreign('contact_id')->references('id')->on('users');
        // content
        $table->text('last_message')->nullable();
        // string/date
        $table->dateTime('last_time')->nullable();
        // booleans
        $table->boolean('listen_notifications')->default(true); 
        $table->boolean('has_blocked')->default(false);

        $table->timestamps();
      });
    }
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('conversations');
  }
}
