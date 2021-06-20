<?php

## CONFIG ##

# LIST EMAIL ADDRESS
$recipient = "subscribe@discovercs.ca";

# SUBJECT (Subscribe/Remove)
$subject = "Subscribe";

# RESULT PAGE
$location = "www.discovercs.ca";

## FORM VALUES ##

# SENDER - WE ALSO USE THE RECIPIENT AS SENDER
# DON'T INCLUDE UNFILTERED USER INPUT IN THE MAIL HEADER!
$sender = $recipient

# MAIL BODY
$body .= "Name: ".$_REQUEST['Name']." \n";
$body .= "Email: ".$_REQUEST['Email']."\n";
# additional fields can go here

## SEND MESSAGE ##
mail( $recipient, $subject, $body, "From: $sender" ) or die ("Mail could not be sent.")

## SHOW RESULT PAGE ##

header( "Location: $location");
?>
