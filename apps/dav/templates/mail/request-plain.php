<?php

$l = $_['l'];

// It's fine to use 'print_unescaped' to print a plain message..
print_unescaped($l->t(
'Hello %s,

%s has invited you to a meeting.

      Title: %s
Description: %s
', array(
	$_['attendee_name'],
	$_['invitee_name'],
	$_['meeting_title'],
	$_['meeting_description'],
)));

/*
Hello florian zimmer,

Leon has invited you to a Spreed online meeting.

            Title: Pups
      Description: Pupsipups
 Planned duration: permanent

Your Sign in Details:
       Meeting ID: 123
    Email address: leon@struktur.de
         Password: 456

Please click on the link below to join the meeting:

https://eu42.spreed.com/checkin/jc/..
*/
