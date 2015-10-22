<?php
// Enter your personal details here to build your online resume.

// Let's start with some basic info.  You must include your full name, but if you don't want to include your phone number or email address you can just delete those lines entirely.
$personal['first_name']= 'Martin';
$personal['last_name'] = 'Guibert';
//$personal['phone_number'] = '';
$personal['email_address'] = 'martin@moadib.net';

// Now let's add any social media pages you've created and want to share.  You can add whatever you want by following the format below.  The first item you add is the name of the social media site, and the second item you add is the URL to your page.
$social_media[] = array('WebSite', 'http://moadib.net', 'WebSite');
$social_media[] = array('Blog', 'http://blog.moadib.net', 'Blog');
$social_media[] = array('Google+', 'https://plus.google.com/110380691595584474529?rel=author', 'Martin Guibert');
$social_media[] = array('Twitter', 'https://twitter.com/MoAdiBFr', 'MoAdiBFr');
$social_media[] = array('LinkedIn', 'http://fr.linkedin.com/pub/martin-guibert/29/b21/850', 'Martin Guibert');

// Cool.  With that stuff out of the way, let's input your work history.  This part requires a bit more information but it's similar to adding a social media page like you did above but with more information.  The first item you enter is last year you worked at the job (or the range of time, if you prefer).  The second item is your job title, the third is the company you worked for, and the fourth is a description of the work you did there.  The description can get a little long, but that's okay.  Just be sure not to use any single quotes ('') or things will break!  You can add as many jobs as you like and the script will adapt.
$work_history[] = array('2014',
						'Software Egineer',
						'Keecker',
						'I\'m in charge of Keecker "remote" Android application, I also work on webservices and on board Android applications for the Keecker.');

$work_history[] = array('2012',
						'Android Developer',
						'Withings',
						'Working with the Mobile development team I was in charge of Withings Android applications ("Health Mate" and "WithBaby "). As the only Android developer I had the opportunity to work on Health Mate starting from nothing. Doing so I learned a lot of things about the Android SDK pattern and API like USB Accessory, Bluetooth, ...');
$work_history[] = array('2011',
						'Research Engineer',
						'Gostai',
						'In the GostaiNet and Jazz team, I was in charge of deploying and managing the new Gostainet architecture and develop small components in C++ and Urbi for Jazz to interact with GostaiNet.');
$work_history[] = array('2010',
						'Trainee',
						'Gostai',
						'Study on new solutions for the GostaiNet architecture. Developpment of web based control interface for Jazz and Urbified robots. Development of C++ objects for Urbi to interact with Jazz\'s hardware.');

$work_history[] = array('2009',
						'Student Researcher',
						'Chiba Institute Of Technology',
						'Creation of a small game in order to experiment the effect of network latency on haptic sensation.  Interaction over the network on the same 3D and Haptic world up to 4 players. Development using a combination of OpenGL and OpenHaptic.');


// Phew!  That was the hard part.  Now we need to enter in some other important information about you.  Let's start with your education.  You only need to enter two things: your school and a description of your degree.  If you went to Brown University you'd enter that for your school, then put your year and graduation date as the description (e.g. "BA in Social Sciences, Class of 2002").
$education[] = array('Universit&eacute; de Technologie de Compi&egrave;gne', 'Master’s Degree in Engineering, Real Time and Embedded Systems');
$education[] = array('Lyc&eacute;e Technique Diderot', 'BTS (HDN / Associate Degree), Computer Sciences and Network');

// Presumably you learned something in school and developed a few skills over the course of your lifetime.  Let's add them here.
$skills[] = array('Android Developement', 'Development on Android devices using the Android SDK and JAVA. I have experience using a wide variety of API especially in communication like Bluetooth and USB Accessory.');
$skills[] = array('Embedded Linux Developement', 'Development on embbeded system with Linux, Xenomai and Android. Using C/C++, Java and Urbi');
$skills[] = array('Web Development', 'Webservices and Web oriented development using Python and PHP with Django, Piston and Symfony.');
$skills[] = array('Object Oriented Development', 'Object oriented development using ADA, C++, Java and python.');


// Finally, let's list any awards or honors you've received so you can show off your accomplishments.  To add an award, just use the format below.  (I'm sure you have the hang of this by now, but we're going to go over it anyway.)  The first item you enter is the name of the award/honor (e.g. "Advertising Gold Award" or "Published in the New Yorker") and the second item is the description of the award/honor (e.g. "2010 TV Ads Under $50,000" or "Short story about the trials of Orthodox Jews in Arkansas, May 2016").
$awards[] = array('Award Name', 'Description');

// Want to turn off any of the sections on your resume?  You can do that in the settings.  Just change any section from true to false and it'll disappear.  (Note: You can't turn off your work history--that's sort of important!)
$settings['social_media'] = true;
$settings['education'] = true;
$settings['skills'] = true;
$settings['awards'] = false;

// There are also a few other settings you can toggle on and off, such as offering a printable version of your resume and whether to use a dark or light style (set style to "dark" or "light" to choose).
$settings['printable'] = true;
$settings['style'] = "dark";
?>
