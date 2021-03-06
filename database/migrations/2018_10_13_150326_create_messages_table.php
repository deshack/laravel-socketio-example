<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create( 'chat_messages', function ( Blueprint $table ) {
            $table->increments( 'id' );
            $table->integer( 'channel_id' )->unsigned();
            $table->integer( 'user_id' )->unsigned();
            $table->text( 'message' );
            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists( 'chat_messages' );
    }
}
