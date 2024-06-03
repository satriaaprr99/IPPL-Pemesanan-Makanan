<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentLandingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_landing', function (Blueprint $table) {
            $table->id();
            $table->text('title_s1')->nullable();
            $table->text('caption_s1')->nullable();
            $table->text('bg_slider_1')->nullable();
            $table->text('title_s2')->nullable();
            $table->text('caption_s2')->nullable();
            $table->text('bg_slider_2')->nullable();
            $table->text('title_s3')->nullable();
            $table->text('caption_s3')->nullable();
            $table->text('bg_slider_3')->nullable();

            $table->text('bg_section_1')->nullable();
            $table->text('title1')->nullable();
            $table->text('gambar1_t1')->nullable();
            $table->text('judul1_t1')->nullable();
            $table->text('content1_t1')->nullable();
            $table->text('gambar2_t1')->nullable();
            $table->text('judul2_t1')->nullable();
            $table->text('content2_t1')->nullable();
            $table->text('gambar3_t1')->nullable();
            $table->text('judul3_t1')->nullable();
            $table->text('content3_t1')->nullable();

            $table->text('bg_section_2')->nullable();
            $table->text('title2')->nullable();
            $table->text('subtitle2')->nullable();

            $table->text('gambar1_t3')->nullable();
            $table->text('judul1_t3')->nullable();
            $table->text('subtitle1_t3')->nullable();
            $table->text('caption1_t3')->nullable();
            $table->text('gambar2_t3')->nullable();
            $table->text('judul2_t3')->nullable();
            $table->text('subtitle2_t3')->nullable();
            $table->text('caption2_t3')->nullable();
            $table->text('gambar3_t3')->nullable();
            $table->text('judul3_t3')->nullable();
            $table->text('subtitle3_t3')->nullable();
            $table->text('caption3_t3')->nullable();

            $table->text('bg_section_4')->nullable();
            $table->text('title4')->nullable();
            $table->text('subtitle4')->nullable();

            $table->text('caption_f_1')->nullable();
            $table->text('caption_f_2')->nullable();
            $table->text('caption_f_3')->nullable();
            $table->text('caption_f_4')->nullable();

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
        Schema::dropIfExists('content_landing');
    }
}
