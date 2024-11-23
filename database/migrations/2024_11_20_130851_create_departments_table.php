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
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->string('department_name'); // Department name
            $table->string('position_name');  // Position title in the department
            $table->integer('headcount')->default(0); // Number of employees in the position
            $table->enum('job_status', ['Open', 'Closed'])->default('Open'); // Job opening status
            $table->enum('job_stage', ['Application', 'Interview', 'Offer', 'Hired', 'Rejected'])->default('Application'); // Job stage
            $table->string('created_by')->nullable(); // Admin who created the department
            $table->string('updated_by')->nullable(); // Admin who updated the department
            $table->timestamps(); // created_at and updated_at fields
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departments');
    }
};
