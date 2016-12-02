<?php namespace Sfc\Sitesforchurch\Models;

use Model;

/**
 * Model
 */
class Sermon extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Validation
     */
    public $rules = [
    ];

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'sfc_sitesforchurch_sermons';

    // Relations

    public $belongsTo = [
        'series' => ['Sfc\Sitesforchurch\Models\Series'],
        'speaker' => ['Sfc\Sitesforchurch\Models\Speaker']
    ];

    public $attachOne = [
    'mp3' => 'System\Models\File',
    'slides' => 'System\Models\File',
    'handout' => 'System\Models\File'
];
}