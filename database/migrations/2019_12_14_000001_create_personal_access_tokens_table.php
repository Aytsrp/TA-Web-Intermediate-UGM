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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('brand');
            $table->string('model');
            $table->year('year');
            $table->string('generation');
            $table->string('engine');
            $table->enum('transmission',['Manual','Automatic','Continuously Variable','Semi-automatic','Dual Clutch']);
            $table->enum('bodytype',['Off-road vehicle','Cabriolet','Coupe','Minivan','Pick-up','Sedan','Station wagon (estate)','Hatchback','SUV','Crossover','MPV','Coupe - Cabriolet','SAV','CUV','Targa','Roadster','Grand Tourer','Fastback','Liftback','SAC','Quadricycle']);
            $table->enum('fueltype',['Petrol (Gasoline)','Diesel','Electricity','Hydrogen','LPG','Ethanol - E85','Petrol / LPG','Petrol / CNG','Petrol / Electricity','Diesel / Electricity','Petrol / Ethanol - E85', 'Petrol / Ethanol - E85 / Electricity','Hydrogen / Electricity']);
            $table->enum('drivewheel',['Rear wheel drive','Front wheel drive','All wheel drive (4x4)']);
            $table->string('images');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
