<?php

use App\Models\Client;
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
        Schema::create('mechanics', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->string('phone')->nullable(false);
            $table->string('percentage')->default(0);
            // $table->foreignIdFor(Client::class)->references('id')->on('clients')->onDelete('CASCADE');
            // $table->foreignIdFor(Vehicle::class)->references('id')->on('vehicles')->onDelete('CASCADE');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::table('mechanics', function (Blueprint $table) {
        //     $table->dropForeignIdFor(Client::class);
        //     $table->dropForeignIdFor(Vehicles::class);
        // });
        Schema::dropIfExists('mechanics');
    }
};
