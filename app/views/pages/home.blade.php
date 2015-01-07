@extends('layouts.default')
@section('content')
@stop

<div class="container-fluid">
	<p class="homeexample">Make your tweets inspirational quotes.</p>
</div>

<div class="container">	
	<p>Search for your tweets here.</p>
	<p> {{Form::open(array('url' => '')) }}
		<p>{{ Form::label('search', 'Keywords (one per search)') }}
		{{ Form::text('keyword', null, array('tweet'=>'value')) }}
		{{ Form::submit('Sweep!') }} {{ Form::close() }}</p>
	</p>
</div>
<!--<form action="$_SERVER['PHP_SELF']" method="POST">
<input type="text" value="search" name="search" class="col-md-1">

<input type="submit" class="primary" value="search" name="search"></a></p>-->

<?php 


/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "32661138-nFEcD5qcsse7wCW8RskmH1XiM4kkv04yNfViVCBqQ",
    'oauth_access_token_secret' => "SJCQTzg9637hamVqCVoFw0gOVx0oBULCq4OPf5qhnoOMW",
    'consumer_key' => "mbhxCseUprBbO49TZ5Ee3XJIM",
    'consumer_secret' => "w57Vz4a5HJv5W5Tqe54BgBgiCOUnwQS2pasb8JdFeOe0ptGT6I"
);

$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
$getfield = '?screen_name=CelinetheFeline';
$requestMethod = 'GET';

$twitter = new TwitterAPIExchange($settings);



$responses = $twitter->setGetfield($getfield)
    ->buildOauth($url, $requestMethod)
    ->performRequest();

$responses = (json_decode($responses));
foreach($responses as $response){
	$text = $response->text;
	echo "<div class='container tweets'>" .  $text .  "</div>";
	if (strpos($text,'Wow') !== false) {
    echo 'HERPDERP';
	}
}


//var_dump$_POST["search"];

/*if (!empty($searchinput)) {
	var_dump($searchinput);
} else {
	echo "there's nothing here";
	}*/

?>

</form>


