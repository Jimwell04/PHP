<?php 

include_once("person.php");


class student extends person {
  
  var $degree = "Degree";
  var $year = 0;
  var $school = "School";
  
  function set_degree($new_degree) {
      
      $this->degree = $new_degree;
      
    }
    
    function set_year($new_year) {
        
        $this->year = $new_year;
        
    }
    
    function set_school($new_school) {
        
        $this->school = $new_school;
        
    }
    
    function get_degree() {
      
      return $this->degree;
      
    }
    
    function get_year() {
        
        return $this->year;
        
    }
    
    function get_school() {
        
        return $this->school;
        
    }
    
    function set_school_data($new_name, $new_age, $new_gender, $new_degree, $new_year, $new_school) {
      
      $this->name = $new_name;
      $this->age = $new_age;
      $this->gender = $new_gender;
      
      $this->degree = $new_degree;
      $this->year = $new_year;
      $this->school = $new_school;
      
    }
    
    function get_school_data() {
        
        return " Name: ".$this->name." Age: ".$this->age." Gender: ".$this->gender." Degree: ".$this->degree." Year: ".$this->year." School: ".$this->school;
        
    }
  
}

?>
