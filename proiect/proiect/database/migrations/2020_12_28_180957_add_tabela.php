<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTabela extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    
        Schema::table('posts', function (Blueprint $table) {
            $table->string('title');
            $table->string('subiect');
            $table->mediumText('body');
            $table->integer('user_id');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('title');
            $table->dropColumn('subiect');
            $table->dropColumn('body');
            $table->dropColumn('user_id');
            });
    }
}
