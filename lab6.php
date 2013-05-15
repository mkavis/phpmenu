<?
//Get values from UI
$day= $_GET["day"];
$hour= $_GET["hour"];
$meeting= $_GET["meeting"];


echo "<br>Day=".$day." Hour=".$hour." Meeting=".$meeting;

//Load 2 dimensional associate array replacing numbers with day and time
$Daily_Schedule = array("Monday" => array("8am" => "Daily Scrum",   
				   "9am"  => "Blocked for coding", 
				   "10am" => "Free",
				   "11am" => "Free",
				   "12pm" => "Lunch", 
				   "1pm" => "Free",
				   "2pm" => "Presentation on standards",
				   "3pm" => "Free",
				   "4pm" => "PHP Training",
				   "5pm" => "PHP Training"),
                      "Tuesday" => array("8am" => "Daily Scrum",   
				   "9am"  => "Blocked for coding", 
				   "10am" => "Free",
				   "11am" => "Free",
				   "12pm" => "Lunch", 
				   "1pm" => "Free",
				   "2pm" => "Code review",
				   "3pm" => "Free",
				   "4pm" => "Bogus manager meeting",
				   "5pm" => "Free"),
                      "Wednesday" => array("8am" => "Daily Scrum",   
				   "9am"  => "Status meeting", 
				   "10am" => "Free",
				   "11am" => "Grooming meeting",
				   "12pm" => "Grooming meeting w/lunch", 
				   "1pm" => "Grooming meeting",
				   "2pm" => "Code review",
				   "3pm" => "Free",
				   "4pm" => "Staff meeting",
				   "5pm" => "Free"),
                      "Thursday" => array("8am" => "Daily Scrum",   
				   "9am"  => "Blocked for coding", 
				   "10am" => "QA Meeting",
				   "11am" => "Free",
				   "12pm" => "Lunch", 
				   "1pm" => "Free",
				   "2pm" => "Implementation meeting",
				   "3pm" => "Free",
				   "4pm" => "Bogus manager meeting",
				   "5pm" => "Free"),
                      "Friday" => array("8am" => "Vacatiaon day",
                      		   "9am"  => "Vacation day", 
				   "10am" => "Vacation day",
				   "11am" => "Vacation day",
				   "12pm" => "Vacation day", 
				   "1pm" => "Vacation day",
				   "2pm" => "Vacation day",
				   "3pm" => "Vacation day",
				   "4pm" => "Vacation day",
				   "5pm" => "Vacation day"));

//Update calendar from UI data
//Find the meeting associated with the Day and Hour submitted on the UI and replace it with the new meeting description;
$Daily_Schedule[$day][$hour]=$meeting;


//Loop through array
while (list($key, $value) = each($Daily_Schedule)) {

   echo "Here's is my daily meetings for ".$key.":<br/>"; /* Print day */
 /*
   if ($key=$day and $value=$hour) {
   echo "I am here ".$day.$hour;
   }
   else {
   echo "I am there ".$day.$hour;
   } */
   
   echo "<pre>";
   print_r($value); /* Print hourly schedule */
   echo "</pre>";
}
?>