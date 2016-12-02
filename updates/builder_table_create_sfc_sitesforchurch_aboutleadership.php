<?php namespace Sfc\Sitesforchurch\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSfcSitesforchurchAboutleadership extends Migration
{
    public function up()
    {
        Schema::create('sfc_sitesforchurch_aboutleadership', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('leader_name')->nullable();
            $table->string('position')->nullable();
            $table->text('body_content')->nullable();
            $table->string('photo')->nullable();
            $table->boolean('is_senior_pastor')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sfc_sitesforchurch_aboutleadership');
    }
}
