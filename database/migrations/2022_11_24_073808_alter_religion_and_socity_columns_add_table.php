<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterReligionAndSocityColumnsAddTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('religion_and_socity', function (Blueprint $table) {
            $table->dropColumn('descripition');
            $table->text('description')->nullable();



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('religion_and_socity', function (Blueprint $table) {
            $table->dropColumn([
               'description',

             ]);
          });
    }
}
