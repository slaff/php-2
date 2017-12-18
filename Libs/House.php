<?php
namespace Libs;

interface HouseInterface {
  public function openDoor();
  public function closeDoor();
}

interface Bathroom {
  public function startWater();
  public function stopWater();
}

abstract class House implements HouseInterface, Bathroom  {
   protected $doorOpened;

   abstract public function openWindow();
   
   abstract public function closeWindow();

   public function openDoor() {
      $this->doorOpened = true;
   }
   
   public function closeDoor() {
      $this->doorOpened = false;
   }

   public function startWater() {
     // ...
   }
   public function stopWater() {
     //...
   }
}


















