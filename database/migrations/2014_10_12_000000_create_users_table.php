<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('user_type')->default('System User');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->index(['user_type']);
        });

        DB::table('users')
            ->insert([
                    'first_name' => 'Admin',
                    'last_name'  => 'Admin',
                    'email'      => 'admin@admin.com',
                    'user_type'  => 'System Admin',
                    'password'   => Hash::make('qwerty12345**'),
                    'created_at' => now(),
                    'updated_at' => now()
            ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
