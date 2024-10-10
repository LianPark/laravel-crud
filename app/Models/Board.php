<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int      $bid
 * @property int      $idx
 * @property int      $parent_id
 * @property int      $hit
 * @property int      $lock_post
 * @property string   $userid
 * @property string   $subject
 * @property string   $content
 * @property string   $multi
 * @property string   $name
 * @property string   $pw
 * @property string   $title
 * @property string   $content
 * @property DateTime $regdate
 * @property DateTime $modifydate
 * @property boolean  $status
 * @property Date     $date
 */
class Board extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'board';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'bid';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idx', 'userid', 'subject', 'cnt', 'content', 'regdate', 'modifydate', 'status', 'parent_id', 'multi', 'name', 'pw', 'title', 'content', 'date', 'hit', 'lock_post'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'bid' => 'int', 'idx' => 'int', 'userid' => 'string', 'subject' => 'string', 'content' => 'string', 'regdate' => 'datetime', 'modifydate' => 'datetime', 'status' => 'boolean', 'parent_id' => 'int', 'multi' => 'string', 'name' => 'string', 'pw' => 'string', 'title' => 'string', 'content' => 'string', 'date' => 'date', 'hit' => 'int', 'lock_post' => 'int'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'regdate', 'modifydate', 'date'
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var boolean
     */
    public $timestamps = false;

    // Scopes...

    // Functions ...

    // Relations ...
}
