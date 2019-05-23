<?php

use GuzzleHttp\Client;

Route::get('/', function () {
	$client = new GuzzleHttp\Client;
	try {
	    $response = $client->post('https://demos.justlaravel.com/integrate-passport-laravel-api/oauth/token', [
	        'form_params' => [
	            'client_id' => client_id_after_registring_to_API,
	            'client_secret' => 'client_secret_after_registring_to_API',
	            'grant_type' => 'password',
	            'username' => 'username_given_for_registration',
	            'password' => 'password_given_for_registration',
	            'scope' => '*',
	        ]
	    ]);

	    $auth = json_decode( (string) $response->getBody() );
	    $response = $client->get('https://demos.justlaravel.com/integrate-passport-laravel-api/api/users', [
	        'headers' => [
	            'Authorization' => 'Bearer '.$auth->access_token,
	        ]
	    ]);
	    $details = json_decode( (string) $response->getBody() );
	    ?>
	    <table style="width:100%; border: 1px solid black;  border-collapse: collapse;">
	    	<tr style="border: 1px solid black;  border-collapse: collapse;">
	    		<td>#</td>
	    		<td>Name</td>
	    		<td>Email</td>
	    	</tr>
		   <?php foreach ($details as $detail) { ?>
				<tr>
					<td><?php echo $detail->id; ?></td>
		        	<td><?php echo $detail->name; ?></td>
		        	<td><?php echo $detail->email; ?></td>
		        </tr>
		   <?php } ?>
	    </table>
	<?php } catch (GuzzleHttp\Exception\BadResponseException $e) {
	    echo "<pre>"; echo $e. "Unable to retrieve access token."; echo "</pre>";
	}
});
