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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('booking_number', 50)->unique();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('service_id')->constrained('services');
            $table->foreignId('provider_id')->constrained('users');
            $table->foreignId('pricing_tier_id')->nullable()->constrained('pricing_tiers');
            $table->date('booking_date');
            $table->string('time_slot', 20);
            $table->text('service_address');
            $table->string('landmark')->nullable();
            $table->text('special_instructions')->nullable();
            $table->enum('status', ['pending', 'confirmed', 'scheduled', 'in_progress', 'completed', 'cancelled', 'refunded', 'disputed'])->default('pending');
            $table->decimal('base_amount', 10, 2);
            $table->decimal('tax_amount', 10, 2);
            $table->decimal('discount_amount', 10, 2)->default(0);
            $table->decimal('total_amount', 10, 2);
            $table->text('cancellation_reason')->nullable();
            $table->foreignId('cancelled_by')->nullable()->constrained('users');
            $table->timestamp('cancelled_at')->nullable();
            $table->timestamp('completed_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
