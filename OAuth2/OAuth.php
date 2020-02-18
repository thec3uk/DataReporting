<?php
require('client.php');

const CLIENT_ID     = 'kmSvE5Dt83bjZqYhaKhe';
const CLIENT_SECRET = '1kXywdFenoMfunQ37A1q';

const REDIRECT_URI           = 'http://url/of/this.php';
const AUTHORIZATION_ENDPOINT = 'https://thec3.churchsuite.co.uk/oauth/authorize';
const TOKEN_ENDPOINT         = 'https://thec3.churchsuite.co.uk/oauth/token';

$client = new OAuth2\Client(CLIENT_ID, CLIENT_SECRET);
if (!isset($_GET['code']))
{
    $auth_url = $client->getAuthenticationUrl(AUTHORIZATION_ENDPOINT, REDIRECT_URI);
    header('Location: ' . $auth_url);
    die('Redirect');
}
else
{
    $params = array('code' => $_GET['code'], 'redirect_uri' => REDIRECT_URI);
    $response = $client->getAccessToken(TOKEN_ENDPOINT, 'authorization_code', $params);
    parse_str($response['result'], $info);
    $client->setAccessToken($info['access_token']);
    $response = $client->fetch('ChurchSuite link for what I want to fetch here');
    var_dump($response, $response['result']);
}
?>
