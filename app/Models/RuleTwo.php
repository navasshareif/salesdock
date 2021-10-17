<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class RuleTwo extends Product
{
	protected $table = 'products';

	protected static function booted()
    {
        static::addGlobalScope('ruleDownloadSpeedGreaterThan100AndFiber', function (Builder $builder) {
        	$builder->DownloadSpeedGreaterThan(100)
        			->Technology('fiber');
        });
    }
}
