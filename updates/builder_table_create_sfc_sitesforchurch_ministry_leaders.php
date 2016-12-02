<?php namespace Sfc\Sitesforchurch\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSfcSitesforchurchMinistryLeaders extends Migration
{
    public function up()
    {
        Schema::create('sfc_sitesforchurch_ministry_leaders', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->nullable();
            $table->text('bio')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('ministries')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sfc_sitesforchurch_ministry_leaders');
    }
}
