<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int      $wr_id
 * @property int      $wr_num
 * @property int      $wr_parent
 * @property int      $wr_is_comment
 * @property int      $wr_comment
 * @property int      $wr_link1_hit
 * @property int      $wr_link2_hit
 * @property int      $wr_hit
 * @property int      $wr_good
 * @property int      $wr_nogood
 * @property int      $wr_file
 * @property string   $wr_reply
 * @property string   $wr_comment_reply
 * @property string   $ca_name
 * @property string   $wr_subject
 * @property string   $wr_content
 * @property string   $wr_link1
 * @property string   $wr_link2
 * @property string   $mb_id
 * @property string   $wr_password
 * @property string   $wr_name
 * @property string   $wr_email
 * @property string   $wr_homepage
 * @property string   $wr_last
 * @property string   $wr_ip
 * @property string   $wr_facebook_user
 * @property string   $wr_twitter_user
 * @property string   $wr_1
 * @property string   $wr_2
 * @property string   $wr_3
 * @property string   $wr_4
 * @property string   $wr_5
 * @property string   $wr_6
 * @property string   $wr_7
 * @property string   $wr_8
 * @property string   $wr_9
 * @property string   $wr_10
 * @property DateTime $wr_datetime
 */
class G5WriteGnuboard extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'g5_write_gnuboard';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'wr_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'wr_num', 'wr_reply', 'wr_parent', 'wr_is_comment', 'wr_comment', 'wr_comment_reply', 'ca_name', 'wr_option', 'wr_subject', 'wr_content', 'wr_link1', 'wr_link2', 'wr_link1_hit', 'wr_link2_hit', 'wr_hit', 'wr_good', 'wr_nogood', 'mb_id', 'wr_password', 'wr_name', 'wr_email', 'wr_homepage', 'wr_datetime', 'wr_file', 'wr_last', 'wr_ip', 'wr_facebook_user', 'wr_twitter_user', 'wr_1', 'wr_2', 'wr_3', 'wr_4', 'wr_5', 'wr_6', 'wr_7', 'wr_8', 'wr_9', 'wr_10'
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
        'wr_id' => 'int', 'wr_num' => 'int', 'wr_reply' => 'string', 'wr_parent' => 'int', 'wr_is_comment' => 'int', 'wr_comment' => 'int', 'wr_comment_reply' => 'string', 'ca_name' => 'string', 'wr_subject' => 'string', 'wr_content' => 'string', 'wr_link1' => 'string', 'wr_link2' => 'string', 'wr_link1_hit' => 'int', 'wr_link2_hit' => 'int', 'wr_hit' => 'int', 'wr_good' => 'int', 'wr_nogood' => 'int', 'mb_id' => 'string', 'wr_password' => 'string', 'wr_name' => 'string', 'wr_email' => 'string', 'wr_homepage' => 'string', 'wr_datetime' => 'datetime', 'wr_file' => 'int', 'wr_last' => 'string', 'wr_ip' => 'string', 'wr_facebook_user' => 'string', 'wr_twitter_user' => 'string', 'wr_1' => 'string', 'wr_2' => 'string', 'wr_3' => 'string', 'wr_4' => 'string', 'wr_5' => 'string', 'wr_6' => 'string', 'wr_7' => 'string', 'wr_8' => 'string', 'wr_9' => 'string', 'wr_10' => 'string'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'wr_datetime'
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
