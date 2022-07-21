<?php 

class person {
  
  var $name = "Name";
  var $age = 0;
  var $gender = '';
  
  function set_name($new_name) {
    
    $this->name = $new_name;
    
  }
  
  function set_age($new_age) {
      
      $this->age = $new_age;
      
  }
  
  function set_gender($new_gender) {
      
      $this->gender = $new_gender;
      
  }
  
  function get_name() {
    
    return $this->name;
    
  }
  
  function get_age() {
      
      return $this->age;
      
  }
  
  function get_gender() {
      
      return $this->gender;
      
  }
  
  function set_data($new_name, $new_age, $new_gender) {
    
    $this->name = $new_name;
    $this->age = $new_age;
    $this->gender = $new_gender;
    
  }
  
  function get_data() {
      
      return " Name: ".$this->name." Age: ".$this->age." Gender: ".$this->gender;
      
  }
  
}

?>
