<?php
namespace Libs\Db;

class Repository {

  private $pdo;

  public function __construct($dbConfig)  {
     // create connection to DB
     $this->pdo = new \PDO($dbConfig['dsn'], 
                          $dbConfig['username'], 
                          $dbConfig['password'], 
                          $dbConfig['options']);

  }

  public function findById(int $id) {
     // create SELECT statement 


     // TODO: 1. change the query to use prepared statement
     //       2. set the id as named parameter and execute the query 
     // $id = "123; DELETE FROM customers; "
     //   

     $stmt = $this->pdo->query('SELECT * FROM customers WHERE id = '.$id);
     
     if(!$stmt->rowCount()) {
        return null;
     }

     // get all information for customer with id $id
     // fetch that information as associative array
     $row  = $stmt->fetch(\PDO::FETCH_ASSOC);

     $customer = new Customer();

     // Hydration: ClassProperties, ClassMethods
      
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
