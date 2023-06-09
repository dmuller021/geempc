<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorrectionsForeachTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('components', function (Blueprint $table) {
            $table->timestamps();
        });

        Schema::table('builds', function (Blueprint $table) {
            $table->timestamps();
        });

        Schema::table('discount_codes', function (Blueprint $table) {
            $table->timestamps();
        });

        Schema::table('order_history', function (Blueprint $table) {
            $table->timestamps();
        });

        Schema::table('presets', function (Blueprint $table) {
            $table->timestamps();
        });

        Schema::table('repairs', function (Blueprint $table) {
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_corrections__foreach_');
    }
}
