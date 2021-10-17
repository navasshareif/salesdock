<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function scopeRuleUploadSpeedLessThan($qry, $speed) {
		return $qry->where('upload_speed', '<', $speed);
	}

	public function scopeDownloadSpeedGreaterThan($qry, $speed) {
		return $qry->where('download_speed', '>', $speed);
	}

	public function scopeTechnology($qry, $tech) {
		return $qry->where('technology', $tech);
	}
}
