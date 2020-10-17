<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('name', 95)->nullable(false)->comment('Tên của report có thể thay đổi, và mặc định là tên topic');
            $table->unsignedBigInteger('player_id')->nullable(false);
            $table->unsignedBigInteger('question_id')->nullable(false);
            $table->unsignedBigInteger('room_id')->nullable(false);
            $table->unsignedInteger('player_score')->nullable(false)->comment('Điểm đạt được của thí sinh của câu hỏi này');
            $table->unsignedFloat('reply_time')->nullable(false)->comment('Thời gian trả lời câu hỏi của thí sinh');
            $table->jsonb('ans_select')->nullable(true)->comment('[{"a": "ans content", "isCorrectAns": bool, "img_ans": string}]');
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
        Schema::dropIfExists('reports');
    }
}
