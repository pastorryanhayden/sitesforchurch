<?php namespace Sfc\Sitesforchurch\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSfcSitesforchurchSermons2 extends Migration
{
    public function up()
    {
        Schema::table('sfc_sitesforchurch_sermons', function($table)
        {
            $table->string('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('sfc_sitesforchurch_sermons', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
