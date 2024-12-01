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
        // Create the currencies table
        Schema::create('currencies', function (Blueprint $table) {
            $table->engine = 'InnoDB'; // Ensure InnoDB engine
            $table->id();
            $table->string('name');
            $table->string('code')->unique();
            $table->string('symbol');
            $table->string('image_url')->nullable();
            $table->timestamps();
        });
    
        // Create the currencyrates table
        Schema::create('currencyrates', function (Blueprint $table) {
            $table->engine = 'InnoDB'; // Ensure InnoDB engine
            $table->id(); // Primary key
            $table->decimal('buy', 10, 2); // Buy price
            $table->decimal('sell', 10, 2); // Sell price
            
            // Ensure currency_id is the same type as the id of currencies (unsignedBigInteger)
            $table->unsignedBigInteger('currency_id');
            
            // Add foreign key constraint
            $table->foreign('currency_id')->references('id')->on('currencies')->onDelete('cascade');
            
            $table->timestamps(); // Created and updated timestamps
        });
    
        // Create the exchange_rates table
        Schema::create('exchange_rates', function (Blueprint $table) {
            $table->engine = 'InnoDB'; // Ensure InnoDB engine
            $table->id();
            $table->string('provider'); // Exchange rate provider
            $table->unsignedBigInteger('currency_id'); // Foreign key for currencies
            $table->decimal('rate', 15, 6); // The exchange rate with 6 decimal places
            
            // Add foreign key constraint
            $table->foreign('currency_id')->references('id')->on('currencies')->onDelete('cascade');
            
            $table->timestamps(); // Created and updated timestamps
        });
    }
    
};
