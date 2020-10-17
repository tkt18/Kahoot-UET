<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnIsPlayedToTableTopic extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('topics', function (Blueprint $table) {
            $table->boolean('is_played')->nullable(false)->comment('khi phòng đã được chơi thì các thao tác thêm, sửa, xóa: thì sẽ tạo ra 1 topic mới');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('topics', function (Blueprint $table) {
            if (Schema::hasColumn('topics', 'is_played')) {
                $table->dropColumn('is_played');
            }
        });
    }
}
