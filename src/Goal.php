<?php

namespace CeonInternet\AB;

use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    protected $table = 'ab_goal';
    protected $fillable = ['goal', 'value'];

    public function experiment()
    {
        return $this->belongsTo('ComoCode\LaravelAb\App\Experiment');
    }

    public function instance()
    {
        return $this->belongsTo('ComoCode\LaravelAb\App\Instance');
    }
}
