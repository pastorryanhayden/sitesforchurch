<?php namespace Sfc\Sitesforchurch\Models;

use Model;

/**
 * Model
 */
class Speaker extends Model
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
    public $table = 'sfc_sitesforchurch_speakers';

    public $hasMany = [
        'sermons' => 'Sfc\Sitesforchurch\Models\Sermon'
    ];
    public $attachOne = [
    'thumbnail' => 'System\Models\File',
];
}