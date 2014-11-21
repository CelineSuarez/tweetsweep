@extends('layouts.default')
@section('content')
@stop


<br>
<br><br><br><br><br><br>
<p>Search for your tweets here.</p>
<p>First login here:
	<a href= "#">


<input type="button" class="primary" value="login"></a></p>
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
$maxid = '?max_id=494227918726254592';
$requestMethod = 'GET';

$twitter = new TwitterAPIExchange($settings);
$response = $twitter->setGetfield($getfield)
	->setMaxid($maxid)
    ->buildOauth($url, $requestMethod)
    ->performRequest();

var_dump(json_decode($response));



?>

