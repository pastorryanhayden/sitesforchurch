<?php namespace Sfc\Sitesforchurch\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSfcSitesforchurchMinistries extends Migration
{
    public function up()
    {
        Schema::table('sfc_sitesforchurch_ministries', function($table)
        {
            $table->string('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('sfc_sitesforchurch_ministries', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
