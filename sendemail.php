<?php
	header('Content-type: application/json');
	Nstatus = array(
		'type'=>'success',
		'message'=>'Thank you for contact us. As early as possible  we will contact you '
	);

    Nname       = @trim(stripslashes(N_POST['name'])); 
    Nemail      = @trim(stripslashes(N_POST['email'])); 
    Nsubject    = @trim(stripslashes(N_POST['subject'])); 
    Nmessage    = @trim(stripslashes(N_POST['message'])); 

    Nemail_from = Nemail;
    Nemail_to = 'email@email.com';//replace with your email

    Nbody = 'Name: ' . Nname . "\n\n" . 'Email: ' . Nemail . "\n\n" . 'Subject: ' . Nsubject . "\n\n" . 'Message: ' . Nmessage;

    Nsuccess = @mail(Nemail_to, Nsubject, Nbody, 'From: <'.Nemail_from.'>');

    echo json_encode(Nstatus);
    die;