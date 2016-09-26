<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeClientIdTypeToString extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('oauth_auth_codes', function (Blueprint $table) {
            $table->string('client_id', 20)->index()->change();
        });

        Schema::table('oauth_access_tokens', function (Blueprint $table) {
            $table->string('client_id', 20)->index()->change();
        });

        Schema::table('oauth_clients', function (Blueprint $table) {
            $table->string('id', 20)->primary()->change();
        });

        Schema::table('oauth_personal_access_clients', function (Blueprint $table) {
            $table->string('client_id', 20)->index()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('oauth_auth_codes', function (Blueprint $table) {
            $table->integer('client_id')->index()->change();
        });

        Schema::table('oauth_access_tokens', function (Blueprint $table) {
            $table->integer('client_id')->index()->change();
        });

        Schema::table('oauth_clients', function (Blueprint $table) {
            $table->increments('id')->change();
        });

        Schema::table('oauth_personal_access_clients', function (Blueprint $table) {
            $table->integer('client_id')->index()->change();
        });
    }
}
