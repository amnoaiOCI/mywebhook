<?php 
//header('Content-Type: application/json');
$request = file_get_contents('php://input');
/*$req_dump = print_r( $request, true );
$fp = file_put_contents( 'request.log', $req_dump );*/
$text = $request;
$events = json_decode($request,true);
if (!is_null($events['events'])) { 
echo 'Good...';
}
else
  echo 'No event request';
?>
