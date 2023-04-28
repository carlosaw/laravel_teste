<?php

use App\Models\Client;
use App\Models\Mechanic;
use App\Models\Vehicle;
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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Client::class)->references('id')->on('clients')->onDelete('CASCADE')->unique();
            $table->foreignIdFor(Vehicle::class)->references('id')->on('vehicles')->onDelete('CASCADE')->unique();
            $table->foreignIdFor(Mechanic::class)->references('id')->on('mechanics')->onDelete('CASCADE')->unique();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function(Blueprint $table){
            $table->dropForeignIdFor(Client::class);
            $table->dropForeignIdFor(Vehicle::class);
            $table->dropForeignIdFor(Mechanic::class);
        });
        Schema::dropIfExists('orders');
    }
};
