<?php

use App\Models\Client;
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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Client::class)->references('id')->on('clients')->onDelete('CASCADE');

            $table->string('plate');
            $table->string('brand')->nullable(true);
            $table->string('model')->nullable(true);
            $table->string('color')->nullable(true);
            $table->integer('year')->nullable(true);
            $table->integer('km')->nullable(true);

            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('vehicles', function(Blueprint $table){
            $table->dropForeignIdFor(Client::class);
        });
        
        Schema::dropIfExists('vehicles');
    }
};