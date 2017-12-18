<?php
namespace Libs\Db;

class Repository {
  public function findById(int $id) {
     $customer = new Customer();
     // TODO:...
     return $customer;
  }

  public function persist(Customer $customer) {
     // TODO: ...
  }
}
