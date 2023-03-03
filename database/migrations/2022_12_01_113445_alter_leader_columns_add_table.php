<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterLeaderColumnsAddTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('leader', function (Blueprint $table) {
            $table->string('address')->nullable();
            $table->string('icon')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('leader', function (Blueprint $table) {
            $table->dropColumn([
               'icon',
               'address',
             ]);
          });
    }
}
