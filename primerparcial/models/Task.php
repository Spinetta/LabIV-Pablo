<?php 

namespace models;

class Task{

    private $title;
    private $date;
    private $description;
    private $reminder;

    function __construct($title, $date, $description, $reminder) 
    {
        $this->title = $title;
        $this->date = $date;
        $this->description = $description;
        $this->reminder = $reminder;
    }

    public function getTitle(){
		return $this->title;
	}

	public function setTitle($title){
		$this->title = $title;
	}

	public function getDate(){
		return $this->date;
	}

	public function setDate($date){
		$this->date = $date;
	}

	public function getDescription(){
		return $this->description;
	}

	public function setDescription($description){
		$this->description = $description;
	}

	public function getReminder(){
		return $this->reminder;
	}

	public function setReminder($reminder){
		$this->reminder = $reminder;
	}
}
?>