<?php
namespace Libs\Db;

/**
* This is a customer ENTITY class
*/
class Customer {

public $id;

/**
* @Column("firstName") <!--- This is example of mapping
*/
public $firstname;


public $lastname;

}
