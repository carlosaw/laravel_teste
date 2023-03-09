<?php

use App\Models\Client;
use App\Models\Mechanic;
use App\Models\Product;
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
            $table->foreignIdFor(Client::class)->references('id')->on('clients')->onDelete('CASCADE');
            $table->foreignIdFor(Product::class)->references('id')->on('products')->onDelete('CASCADE');
            $table->foreignIdFor(Vehicle::class)->references('id')->on('vehicles')->onDelete('CASCADE');
            $table->foreignIdFor(Mechanic::class)->references('id')->on('mechanics')->onDelete('CASCADE');
            $table->dateTime('due_date')->default('2023-03-03');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function(Blueprint $table){
            $table->dropForeignIdFor(Client::class);
            $table->dropForeignIdFor(Product::class);
            $table->dropForeignIdFor(Vehicle::class);
            $table->dropForeignIdFor(Mechanic::class);
        });
        Schema::dropIfExists('orders');
    }
};
