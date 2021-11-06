<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('tourist_spot_id')->constrained();
            $table->enum('status', ['pending', 'cancelled', 'confirmed', 'for_payment', 'paid'])->default('pending');
            $table->decimal('original_amount', 10, 2);
            $table->decimal('discounted_amount_percentage', 10, 2);
            $table->decimal('discounted_amount', 10, 2);
            $table->decimal('amount', 10, 2);
            $table->datetime('scheduled_at');
            $table->date('expiration_date_at');
            $table->boolean('is_on_the_spot')->default(false);
            $table->text('remark')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('reservations');
    }
}
