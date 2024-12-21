<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateStudentProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('lrn')->nullable()->unique();
            $table->string('l_name', 50);
            $table->string('f_name', 50);
            $table->string('m_name', 50)->nullable();
            $table->string('suffix', 15)->nullable();
            $table->date('bday');
            $table->string('gender');
            $table->string('religion', 30)->nullable();
            $table->string('address')->nullable();
            $table->string('landline')->nullable();
            $table->string('status');
            $table->unsignedBigInteger('level_id');
            $table->string('payment_scheme')->nullable();
            $table->timestamps();
            $table->foreign('level_id')->references('id')->on('grade_levels');
        });

        DB::statement("ALTER TABLE student_profiles MODIFY COLUMN gender ENUM('male', 'female')");
        DB::statement("ALTER TABLE student_profiles MODIFY COLUMN status ENUM('0', '1', '2') DEFAULT '1'");
        DB::statement("ALTER TABLE student_profiles MODIFY COLUMN payment_scheme ENUM('annual', 'biannual', 'quarterly', 'monthly')");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_profiles');
    }
}
