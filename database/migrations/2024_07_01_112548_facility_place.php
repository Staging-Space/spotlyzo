<?php

use App\Models\Facility;
use App\Models\Place;
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
        Schema::create('facility_place', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Place::class)->constrained()->onDelete('cascade');
            $table->foreignIdFor(Facility::class)->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facility_place');
    }
};
