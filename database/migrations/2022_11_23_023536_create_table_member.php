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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('month_duration')->default(1);
            $table->decimal('price')->default(0.0);
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('package_id')->constrained('packages');
            $table->boolean('is_active')->default(false);
            $table->date('membership_start');
            $table->date('membership_end');
            $table->boolean('is_expired')->virtualAs("CASE WHEN CURDATE() BETWEEN membership_start AND membership_end THEN 0 ELSE 1 END");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
        Schema::dropIfExists('packages');
    }
};
