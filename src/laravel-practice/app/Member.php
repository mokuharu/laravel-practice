<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    /**
     * 複数代入制約
     *
     * @var array
     */
    protected $fillabel = ['name', 'profile_img_src'];

    public function penaltyGames () {
        return $this->hasMany('\App\PenaltyGame', 'responsible_member_id');
    }
}
