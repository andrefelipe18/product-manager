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
        // Atualizar a tabela de usuários para adicionar o campo role
        Schema::table('users', function (Blueprint $table) {
            $table->string('role')->default('user');
        });

        // Criar a tabela de marcas
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        // Criar a tabela de relacionamento entre marcas e produtos
        Schema::create('brand_product', function (Blueprint $table) {
            $table->id();
            $table->foreignId('brand_id')->constrained();
            $table->foreignId('product_id')->constrained();
        });


        // Criar a tabela de categorias
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        // Criar a tabela de relacionamento entre categorias e produtos
        Schema::create('category_product', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained();
            $table->foreignId('product_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Remover a tabela de relacionamento entre categorias e produtos
        Schema::dropIfExists('category_product');

        // Remover a tabela de categorias
        Schema::dropIfExists('categories');

        // Remover a tabela de relacionamento entre marcas e produtos
        Schema::dropIfExists('brand_product');

        // Remover a tabela de marcas
        Schema::dropIfExists('brands');

        // Remover o campo role da tabela de usuários
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('role');
        });
    }
};
