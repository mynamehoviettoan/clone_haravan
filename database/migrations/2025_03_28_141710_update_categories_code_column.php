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
        Schema::table('categories', function (Blueprint $table) {
            $table->dropUnique(['code']); // Xóa ràng buộc unique
            $table->string('code')->nullable()->change(); // Cho phép NULL
        });
    }

    public function down(): void
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->string('code')->nullable(false)->change(); // Không cho phép NULL nếu rollback
            $table->unique('code'); // Nếu rollback thì thêm lại unique
        });
    }
};
