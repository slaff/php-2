<?php
namespace Libs\Db;

class Repository {
  public function findById(int $id) {
     $customer = new Customer();

     // Hydration: ClassProperties, ClassMethods
     $row = [
        "id" => 20,
        "firstname" => "ABC",
        "lastname"  => "BCA"
     ];

     // foreach loop
     foreach($row as $name => $value) {
        $customer->$name = $value;
        // $customer->setFirstname($value); 
	// ^ - Example of using ClassMethods
         
        // $methodName = "set".upfirst($name);
	// $customer->$methodName($value);
     }

     // TODO:...
     return $customer;
  }

  public function persist(Customer $customer) {
     // TODO: ...
  }
}
