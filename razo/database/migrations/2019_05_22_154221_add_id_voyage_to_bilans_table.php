<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdVoyageToBilansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bilans', function (Blueprint $table) {
            $table->bigInteger('voyage_id')->unsigned()->after('montantTotal');
            $table->foreign('voyage_id')
            ->references('id')->on('voyages')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bilans', function (Blueprint $table) {
            //
        });
    }
}
