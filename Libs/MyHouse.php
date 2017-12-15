<?php
namespace Libs;

class MyHouse extends House {
   private $windowOpen;

   public function openWindow() {
      $this->windowOpen = true;
   }
   
   public function closeWindow() {
      $this->windowOpen = false;
   }
}
