<?
include ("NewtifryProSMS.php");
// standard message
$result = newtifryProSMS(   "", // for compatibility
                            "", // for compatibility
                            "Test message 1", 
                            "Normal", 
                            "Hello from NewtifryPro", 
                            1, 
                            "https://newtifry.appspot.com", 
                            "http://upload.wikimedia.org/wikipedia/commons/b/b5/PA120016.JPG", 
                            -1,	// speak default
                            false, 	// cache image
                            0, 	// state : default
                            -1); 	// default notify
print_r($result ."\n");

?>
