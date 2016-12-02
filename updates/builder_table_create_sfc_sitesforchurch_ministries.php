<?php namespace Sfc\Sitesforchurch\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSfcSitesforchurchMinistries extends Migration
{
    public function up()
    {
        Schema::create('sfc_sitesforchurch_ministries', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->nullable();
            $table->boolean('published')->nullable();
            $table->boolean('show_on_home_page')->nullable();
            $table->boolean('show_in_menus')->nullable();
            $table->string('group')->nullable();
            $table->text('description')->nullable();
            $table->string('meeting_time')->nullable();
            $table->string('meeting_place')->nullable();
            $table->text('body_content')->nullable();
            $table->string('header_image')->nullable();
            $table->string('logo')->nullable();
            $table->string('leader')->nullable();
            $table->string('events')->nullable();
            $table->string('photos')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sfc_sitesforchurch_ministries');
    }
}
