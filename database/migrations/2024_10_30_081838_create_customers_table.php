<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('name'); // Customer name
            $table->string('mobile')->nullable(); // Mobile number
            $table->string('address')->nullable(); // Address
            $table->text('remarks')->nullable(); // Remarks
            $table->string('length')->nullable();
            $table->string('length2')->nullable();
            $table->string('ghaira')->nullable();
            $table->string('shoulder')->nullable();
            $table->string('neck')->nullable();
            $table->string('chest')->nullable();
            $table->string('upper_chest')->nullable();
            $table->string('blouse_length')->nullable();
            $table->string('upper_back')->nullable();
            $table->string('cross_back')->nullable();
            $table->string('waist')->nullable();
            $table->string('hip')->nullable();
            $table->text('kameez_hip')->nullable();
            $table->string('fitting_seam')->nullable();
            $table->string('sleeve')->nullable();
            $table->text('sleeve2')->nullable();
            $table->string('bicep')->nullable();
            $table->string('armhole')->nullable();
            $table->string('wrist_cuff')->nullable();
            $table->string('west_belt')->nullable();
            $table->string('thigh')->nullable();
            $table->string('skirt_length')->nullable();
            $table->string('crotch')->nullable();
            $table->string('knee')->nullable();
            $table->string('pancha_back')->nullable();
            $table->string('elastic_back')->nullable();
            $table->string('status')->default('active'); // Default status
            $table->string('type')->nullable();
            $table->string('neck_line')->nullable();
            $table->string('pocket')->nullable();
            $table->string('strip')->nullable();
            $table->string('wrist_cluff')->nullable();
            $table->string('button')->nullable();
            $table->string('pleats_drafts')->nullable();
            $table->string('zip')->nullable();
            $table->string('hem_width')->nullable();
            $table->string('piping')->nullable();
            $table->string('dopatta_veil')->nullable();
            $table->string('shalwar')->nullable();
            $table->string('pant_trouser')->nullable();
            $table->string('puncha')->nullable();
            $table->text('note')->nullable();
            $table->text('description')->nullable();
            $table->text('kameez_type')->nullable();
            $table->text('shalwar_type')->nullable();
            $table->text('kameez_style')->nullable();
            $table->text('shalwar_style')->nullable();
            $table->text('down_shoulder')->nullable();
            $table->text('strap_shoulder')->nullable();
            $table->text('elbow')->nullable();
            $table->text('forearm')->nullable();
            $table->text('inseam')->nullable();
            $table->text('seam')->nullable();
            $table->text('calf')->nullable();
            $table->text('ancle')->nullable();
            $table->timestamps(); // created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
