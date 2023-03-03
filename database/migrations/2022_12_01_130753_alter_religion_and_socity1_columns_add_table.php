<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterReligionAndSocity1ColumnsAddTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('religion_and_socity', function (Blueprint $table) {
            $table->string('intro')->nullable();

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
               'intro',
             ]);
          });
    }
}
