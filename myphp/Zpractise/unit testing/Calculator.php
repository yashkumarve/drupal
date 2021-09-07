<?php
require_once("vendor/autoload.php");
 
use Httpful\Request;
 
class Calculator
{
    public function add($a, $b)
    {
        return $a + $b;
    }
 
    public function subtract($a, $b)
    {
        return $a - $b;
    }
 
    public function multiply($a, $b)
    {
        return $a * $b;
    }
 
    public function getUser($user_id)
    {
        // Make a request to the GitHub API with a custom
        // header of "X-Trvial-Header: Just as a demo".
        $url = "https://reqres.in/api/users/" . $user_id;
        $response = Request::get($url)
            ->expectsJson()
            ->send();
 
        return $response;
    }
}
 
$cal = new Calculator();
$user_id = $_GET['user'];
echo $cal->getUser($user_id);