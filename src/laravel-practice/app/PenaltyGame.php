<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PenaltyGame extends Model
{
    /**
     * 複数代入制約
     *
     * @var array
     */
    protected $fillabel = ['name', 'content', 'period', 'resposible_member', 'status'];

    public function members () {
        return $this->belongsTo('\App\Member', 'responsible_member_id');
    }
}
