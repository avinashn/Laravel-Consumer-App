# Laravel-Consumer-App
An example app which consumes an API made in Laravel which is authenticated with passport packages.


## Prerequisites
<ul>
<li>After cloning this repository, go to the root folder, run the following command/s,
<pre>
    composer install
    composer update</pre>
</li>
<li>Rename .env.example to .env and provide your database details there.</li>
<li>Run <pre>php artisan key:generate</pre> </li>

</ul>

## Modify the API auth credentials
<ul>
<li>Register to the API at https://demos.justlaravel.com/integrate-passport-laravel-api/
</li>
<li>Open web.php(`/routes/web.php`) and modify `client_id`, `client_secret`,`username`,`password` which can be obtained in the API</li>


</ul>


## Reference Post
<a href="https://justlaravel.com/integrate-passport-laravel-api">https://justlaravel.com/integrate-passport-laravel-api
</a>


