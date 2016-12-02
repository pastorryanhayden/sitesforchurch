<?php namespace Sfc\Sitesforchurch\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSfcSitesforchurchWelcomeSections extends Migration
{
    public function up()
    {
        Schema::create('sfc_sitesforchurch_welcome_sections', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('order')->nullable();
            $table->string('section_title')->nullable();
            $table->text('section_content')->nullable();
            $table->string('image')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sfc_sitesforchurch_welcome_sections');
    }
}
