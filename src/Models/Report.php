<?php

namespace EKejaksaan\Lapdu\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class Report extends Eloquent
{
    use SoftDeletes;

    protected $fillable = [
        '_id',
        'title',
        'description',
        'number_disposition',
        'date_done',
        'number_letter',
        'date_letter',
        'importance',
        'disposition_ja',
        'disposition_waja',
        'information/instruction',
        'dialihkan_to',
        'dialihkan_bidang_to',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function punishments()
    {
        return $this->hasMany('EKejaksaan\Core\Models\Punishment');
    }
}