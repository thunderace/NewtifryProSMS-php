<?
/**
 * NewtifryProSMS - PHP message push script.
 * for version up to 1.2.0
 */

function iso8601() {
  date_default_timezone_set("UTC");
  $time=time();
  return date("Y-m-d", $time) . 'T' . date("H:i:s", $time) .'.00:00';
}

function newtifryProSMS(	$apikey, // unused here
                          $deviceIds, // unused here  
                          $title, 
                          $source = NULL, 
                          $message = NULL, 
                          $priority = 0, 
                          $url = NULL, 
                          $imageUrl = NULL, 
                          $speak = -1, 
                          $noCache = false, 
                          $state = 0, 
                          $notify = -1) {
  //Prepare variables
  $data = array ( "type"      => "NPSMS",
                  "timestamp" => iso8601(),
                  "priority"  => $priority, 
                  "title"     => $title);


  if ($message) {
    $data["message"] = $message;
  }
  if ($source) {
    $data["source"] = $source;
  }
  if ($url) {
    $data["url"] = $url;
  }
  if ($imageUrl) {
    if (is_array($imageUrl)) {
      for ($i = 1; $i < 6; $i++) {
        if ($imageUrl[$i - 1] != null) {
          $data["image" . $i] = $imageUrl[$i - 1];
        }
      }
    } else {
      $data["image"] = $imageUrl;
    }
  }

  if ($speak == 0 || $speak == 1) {
    $data["speak"] = $speak;
  }
  if ($noCache == true) {
    $data["nocache"] = 1;
  }
  if ($state == 1 || $state == 2) {
    $data["state"] = $state;
  }
  if ($notify == 0 || $notify == 1) {
    $data["notify"] = $notify;
	}
  return json_encode($data);
}
?>
