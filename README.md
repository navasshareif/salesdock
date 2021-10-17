Installation Process:

1. 	Clone the branch
	<b>git clone git@github.com:navasshareif/salesdock.git</b>

2. 	Create a file <b>.env</b> and copy the content <b>.env.example</b>
	Change the DB configuration

3.	Run <b>composer install</b>

4.	Run <b>php artisan key:generate</b>

5.	Run <b>php artisan migrate</b>

6.	Run <b>php artisan db:seed --class=ProductSeeder</b>

7. 	Run <b>php artisan serve</b>