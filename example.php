<?
include ("NewtifryProSMS.php");


// samples
// standard message
$result = newtifryProSMS(  "", // for compatibility
                            "", // for compatibility
                            "Test message 1", 
                            "Normal", 
                            "Hello from NewtifryPro", 
                            1, 
                            "https://newtifry.appspot.com", 
                            "http://upload.wikimedia.org/wikipedia/commons/b/b5/PA120016.JPG", 
                            -1,	// speak 
                            false, 	// noCache
                            0, 	// state : default
                            -1); 	// notify
print_r($result ."\n");
// send $result by SMS to your phone
// sticky message
$result = newtifryProSMS( "",
                            "", 
                            "Test message 2", 
                            "Sticky", 
                            "Hello from NewtifryPro", 
                            1, 
                            "https://newtifry.appspot.com", 
                            "http://upload.wikimedia.org/wikipedia/commons/b/b5/PA120016.JPG", 
                            -1,	// speak 
                            false, 	// noCache
                            1, 	// state : sticky
                            -1); 	// notify
print_r($result ."\n");
// locked message
$result = newtifryProSMS(  "",
                            "", 
                            "Test message 3", 
                            "Locked", 
                            "Hello from NewtifryPro", 
                            1, 
                            "https://newtifry.appspot.com", 
                            "http://upload.wikimedia.org/wikipedia/commons/b/b5/PA120016.JPG", 
                            -1,	// speak 
                            false, 	// noCache
                            2, 	// state : locked
                            -1); 	// notify
print_r($result ."\n");

// with 5 images
$images = array(
  "http://upload.wikimedia.org/wikipedia/commons/b/b5/PA120016.JPG",
  "http://upload.wikimedia.org/wikipedia/commons/c/c3/The_Blue_Bell_-_geograph.org.uk_-_163687.jpg",
  "http://upload.wikimedia.org/wikipedia/commons/b/b3/Trassenheide%2C_Die_Welt_steht_Kopf.jpg",
  "http://upload.wikimedia.org/wikipedia/commons/2/20/Bachorza%2C_dw%C3%B3r_A-259.jpg",
  "http://upload.wikimedia.org/wikipedia/commons/2/20/Interior_of_log_house.jpg");

$result = newtifryProSMS(  "",
                            "", 
                            "Test message 4", 
                            "locked 5 images", 
                            "Hello from NewtifryPro", 
                            1, 
                            "https://newtifry.appspot.com", 
                            $images, 
                            -1,	// speak 
                            false, 	// noCache
                            2, 	// state : locked
                            -1); 	// notify
print_r($result ."\n");
                            
?>
