<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterLeaveRequestVerificationColumnsAddTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('leave_request_verification', function (Blueprint $table) {
            $table->text('lat')->nullable();
            $table->text('long')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('leave_request_verification', function (Blueprint $table) {
            $table->dropColumn([
                'lat',
                'long',

              ]);
           });
    }
}
