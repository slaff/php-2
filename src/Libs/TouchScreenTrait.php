<?php
namespace Libs;

trait TouchScreenTrait {

   public function getTouchedArea() {
      $point1 = [1,10];
      $point2 = [20, 20];
      return [$point1,$point2];
  }

   public function getSpeed() {
     // doSomething();
   }
}
