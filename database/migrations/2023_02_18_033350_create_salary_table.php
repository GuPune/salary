<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salary', function (Blueprint $table) {
            $table->id();
            $table->text('base_salary')->nullable();//ฐานเงินเดือน
            $table->text('base_salary_position')->nullable();//ค่าตำแหน่ง
            $table->text('extra_money')->nullable(); //เงินพิเศษ
            $table->text('ot')->nullable(); //ทำงานวันหยุด
            $table->text('com')->nullable(); //ค่าคอม
            $table->text('oil')->nullable(); //ค่าน้ำมัน
            $table->text('base_month')->nullable(); //รวมเงินเดือน
            $table->text('total_money')->nullable(); //เงินได้สุทธิ
            $table->text('missing')->nullable(); //ขาด
            $table->text('leave')->nullable(); //ลา
            $table->text('late')->nullable(); //มาสาย
            $table->text('advance')->nullable(); //เบิกล่วงหน้า
            $table->text('fine')->nullable(); //ค่าปรับ
            $table->text('sso')->nullable(); //ประกันสังคม
            $table->text('total_deduction')->nullable(); //หักทั้งหมด
            $table->text('work_day')->nullable(); //วัน
            $table->text('work_ot_hour')->nullable(); //OT(ชม.)
            $table->text('work_ot_day')->nullable(); //วัน
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
        Schema::dropIfExists('salary');
    }
}
