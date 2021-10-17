<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class RuleOne extends Product
{    	
	protected $table = 'products';
	
	public function scopeRuleUploadSpeedLessThanAndTechnology($qry, $speed, $tech) {
		$this->scopeRuleUploadSpeedLessThan($qry, $speed);
		$this->scopeTechnology($qry, $tech);
	}
}
