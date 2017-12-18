<?php
namespace Libs\Db;

class Repository {

  public function __construct($dbConfig)  {
     // TODO: create connection to DB
  }


  public function findById(int $id) {
     // TODO: create SELECT statement 
     // get all information for customer with id $id
     // fetch that information as associative array

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
