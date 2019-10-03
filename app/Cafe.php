<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cafe extends Model
{
    use SoftDeletes;

    const TABLE       = 'cafes';
    const NAME        = 'name';
    const ADDRESS     = 'address';
    const CONSENT     = 'consent';
    const SEAT     = 'seat';
    const WIFI     = 'wifi';
    const OPEN     = 'open';
    const CLOSE     = 'close';
    const RESTDAY     = 'restday';
    const CREDIT     = 'credit';
    const ADDTEXT     = 'addtext';

    protected $fillable = [
        Cafe::NAME,
        Cafe::ADDRESS,
        Cafe::CONSENT,
        Cafe::SEAT,
        Cafe::WIFI,
        Cafe::OPEN,
        Cafe::CLOSE,
        Cafe::RESTDAY,
        Cafe::CREDIT,
        Cafe::ADDTEXT,
    ];
}
