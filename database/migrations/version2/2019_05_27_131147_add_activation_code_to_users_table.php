<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddActivationCodeToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumn('users', 'activation_code'))
        {
            Schema::table('users', function (Blueprint $table) {

                $table->string('activation_code', 255)->nullable();

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
        if (Schema::hasColumn('users', 'activation_code'))
        {
            Schema::table('users', function (Blueprint $table) {

                $table->dropColumn('activation_code');
                
            });
        }
    }
}
