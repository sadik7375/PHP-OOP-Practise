<?php

//Create a PHP-based event management system that allows users to create, manage, and track different types of events such as conferences, workshops, and parties. The system should handle event registration, scheduling, and participant management.

//Features
//Event Creation: Users can create events by specifying details such as the event type, title, description, date, time, and venue.
//Event Registration: Participants can register for events, providing their name, email, and any specific requirements they might have.
//Event Management: Ability to update or cancel events.
//Participant Management: List participants for each event and update their registration details.
//Notification System: Send notifications to participants about event updates or cancellations.



abstract class event {


protected $title;
protected $description;
protected $date;
protected $time;
private $partcipant;


public function __construct($title,$description,$date,$time,$partcipant)
{
     $this->title=$title;
     $this->description=$description;
     $this->date=$date;
     $this->time=$time;
     $this->partcipant=$partcipant;


}

public function getDetails(){

    return "Event:$this->title,$this->description,$this->date";
}


public function participant($partcipant)
{
    $this->participant[]=$partcipant;
}


abstract public function sendNotification();



}

class workshop  extends event{


public function sendNotification()
{

 echo "workshop event is started";
}

}

class participant {

private $name;
private $email;

public function __construct($name,$email)
{

 $this->name=$name;
 $this->email=$email;

}


public function getDetails()
{

 return "Name:$this->name and Email:$this->email";


}




}


$event=new workshop("Mela","Mela will be held","20 jan 2025","4 pm ");












