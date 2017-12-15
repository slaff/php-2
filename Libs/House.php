<?php
namespace Libs;

abstract class House {
   protected $doorOpened;

   abstract public function openWindow();
   
   abstract public function closeWindow();

   public function openDoor() {
      $this->doorOpened = true;
   }
   
   public function closeDoor() {
      $this->doorOpened = false;
   }
}
