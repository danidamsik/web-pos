<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transaction_details', function (Blueprint $table) {
            $table->bigIncrements("transaction_detail_id");
            $table->bigInteger('trans_id')->unsigned();
            $table->bigInteger('product_id')->unsigned();
            $table->integer('stock');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('trans_id')->references('trans_id')->on('transactions')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
