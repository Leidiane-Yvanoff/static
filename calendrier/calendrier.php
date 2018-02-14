<html lang="fr">

<head>
    <meta charset="utf-8">
</head>




<?php


require_once __DIR__ . '/vendor/autoload.php';


define('APPLICATION_NAME', 'test');
define('CREDENTIALS_PATH', './calendar-php-quickstart.json');
define('CLIENT_SECRET_PATH', __DIR__ . '/client_secret.json');
// If modifying these scopes, delete your previously saved credentials
// at ~/.credentials/calendar-php-quickstart.json
define('SCOPES', implode(' ', array(
  Google_Service_Calendar::CALENDAR_READONLY)
));


/**
 * Returns an authorized API client.
 * @return Google_Client the authorized client object
 */
function getClient() {
  $client = new Google_Client();
  $client->setApplicationName(APPLICATION_NAME);
  $client->setScopes(SCOPES);
  $client->setAuthConfig(CLIENT_SECRET_PATH);
  $client->setAccessType('offline');

  // Load previously authorized credentials from a file.
  $credentialsPath = expandHomeDirectory(CREDENTIALS_PATH);
  if (file_exists($credentialsPath)) {
    $accessToken = json_decode(file_get_contents($credentialsPath), true);
  } else {
    // Request authorization from the user.
    $authUrl = $client->createAuthUrl();
    printf("Open the following link in your browser:\n%s\n", $authUrl);
    print 'Enter verification code: ';
    $authCode = trim(fgets(STDIN));

    // Exchange authorization code for an access token.
    $accessToken = $client->fetchAccessTokenWithAuthCode($authCode);

    // Store the credentials to disk.
    if(!file_exists(dirname($credentialsPath))) {
      mkdir(dirname($credentialsPath), 0700, true);
    }
    file_put_contents($credentialsPath, json_encode($accessToken));
    printf("Credentials saved to %s\n", $credentialsPath);
  }
  $client->setAccessToken($accessToken);

  // Refresh the token if it's expired.
  if ($client->isAccessTokenExpired()) {
    $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
    file_put_contents($credentialsPath, json_encode($client->getAccessToken()));
  }
  return $client;
}

/**
 * Expands the home directory alias '~' to the full path.
 * @param string $path the path to expand.
 * @return string the expanded path.
 */
function expandHomeDirectory($path) {
  $homeDirectory = getenv('HOME');
  if (empty($homeDirectory)) {
    $homeDirectory = getenv('HOMEDRIVE') . getenv('HOMEPATH');
  }
  return str_replace('~', realpath($homeDirectory), $path);
}

// Get the API client and construct the service object.
$client = getClient();
$service = new Google_Service_Calendar($client);

// Print the next 10 events on the user's calendar.
$calendarId = 'primary';
$optParams = array(
  'maxResults' => 5,
  'orderBy' => 'startTime',
  'singleEvents' => TRUE,
  'timeMin' => date('c'),
);
$results = $service->events->listEvents($calendarId, $optParams);


if (count($results->getItems()) == 0) {
  print "No upcoming events found.\n";
} else {
$i = 1 ; 
  foreach ($results->getItems() as $event) {
    $start = $event->start->dateTime;
    if (empty($start)) {
      $start = $event->start->date;
    }
	
 echo '   
   <div class="calendrier">
    <div class="container">
        <div class="slider">
            <div class="slide">
                <figure><img class="img-responsive" src="img/slide' . $i++.'.jpg" alt="calendar">
                    <figcaption class="date-calendar">
                        <p>';
      	                     printf($event->getSummary(),$start);
      printf($event->getDescription(),$start);
                        echo '</p>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
</div> '; 

      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      /*
	//echo '<div class="w3-display-container mySlides"><img src="img/dummy-640x310-' . $i++.'.jpg" style="width:100%">';
		  

		  
		  
			//echo '<div class="w3-display-middle w3-large w3-container w3-padding-16 ">';  
							    //echo '<div class="panel panel-primary">
										<div class="panel-heading">';
										printf($event->getSummary(),$start); 
										echo '</div>';
										echo '<div class="panel-body" w3-black><FONT color="black">' ;
										printf($event->getDescription(),$start);
										echo '</FONT></div>
									 </div>';
					
					
			 		printf($event->getlocation(),$start);
			echo '</div>';


			
	echo '</div>';
  
	
*/

	
  }
}

?>




</html>
