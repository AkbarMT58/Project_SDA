<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('module_permissions', function (Blueprint $table) {
            $table->id();
            $table->string('role_id')->nullable();
            $table->string('module_permission')->nullable();
            $table->string('id_count')->nullable();
            $table->string('view')->nullable();
            $table->string('create')->nullable();
            $table->string('edit')->nullable();
            $table->string('delete')->nullable();
            $table->string('import')->nullable();
            $table->string('export')->nullable();
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
        Schema::dropIfExists('module_permissions');
    }
}
