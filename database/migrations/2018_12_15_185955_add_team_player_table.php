<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTeamPlayerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('players', function (Blueprint $table) {
            $table->unsignedInteger('team_id')->nullable()->after('last_name');
            $table->foreign('team_id')->references('id')->on('teams');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('players', function (Blueprint $table) {
            $table->dropColumn('team_id');
        });
    }
}
