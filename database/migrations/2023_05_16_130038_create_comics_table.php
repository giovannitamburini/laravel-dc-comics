<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();

            $table->string('title', 100);
            $table->text('description');
            $table->text('thumb');
            // price lo imposto come una stringa perchè il prezzo potrebbe essere espresso anche in altra valuta
            $table->string('price', 10);
            $table->string('series', 50);
            $table->date('sale_date');
            $table->string('type', 50);
            $table->string('artists');
            $table->string('writers');



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
        Schema::dropIfExists('comics');
    }
};
