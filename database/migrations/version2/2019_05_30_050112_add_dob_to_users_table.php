<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDobToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumn('users', 'dob'))
        {
            Schema::table('users', function (Blueprint $table) {

                $table->date('dob')->nullable();

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
        if (Schema::hasColumn('users', 'dob'))
        {
            Schema::table('users', function (Blueprint $table) {

                $table->dropColumn('dob');
                
            });
        }
    }
}
