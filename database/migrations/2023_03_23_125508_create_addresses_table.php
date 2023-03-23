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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Client::class)->references('id')->on('clients')->onDelete('CASCADE');           
            $table->string('street')->nullable(true);
            $table->string('number')->nullable(true);
            $table->string('cep')->nullable(true);
            $table->string('district')->nullable(true);
            $table->string('city')->nullable(true);
            $table->string('state')->nullable(true);
            
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {   
        Schema::table('addresses', function(Blueprint $table){
            $table->dropForeignIdFor(Client::class);
        });
        Schema::dropIfExists('addresses');
    }
};