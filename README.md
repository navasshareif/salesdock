Installation Process:

1. 	Clone the project
	<b>git clone git@github.com:navasshareif/salesdock.git</b>

2. 	Create a file <b>.env</b> and copy the content <b>.env.example</b>
	Change the DB configuration

3.	Run <b>composer install</b>

4.	Run <b>php artisan key:generate</b>

5.	Run <b>php artisan migrate --seed</b>

6. 	Run <b>php artisan serve</b>




<b>Future enhancement:</b>
	To create new rules please follow the below steps:
	
	-> Create a modal by extending the Products model
	
	-> Set the $table = "products"
	
	-> Either you can add global scope or create new local scopes based on the criteria
	
	   1. Add Global Scope
	   protected static function booted()	   
	    {
		static::addGlobalScope('ruleDownloadSpeedGreaterThan100AndFiber', function (Builder $builder) {
			$builder->DownloadSpeedGreaterThan(100)
					->Technology('fiber');
		});
	    }
	
	  2. Add Local scope
	  public function scopeRuleUploadSpeedLessThanAndTechnology($qry, $speed, $tech) {
		$this->scopeRuleUploadSpeedLessThan($qry, $speed);
		$this->scopeTechnology($qry, $tech);
	  }
