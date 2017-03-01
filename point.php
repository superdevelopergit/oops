<?php
class Point {
  public $x;
  public $y;
  
  # equivalent of a php constructor
  public function __construct($x, $y) {
    $this->x = $x;
    $this->y = $y;
  }
  
  public function distance($p) {
    $dx = $this->x - $p->x;
    $dy = $this->y - $p->y;
    return sqrt($dx * $dx + $dy * $dy);
  }
  
  # equivalent of php's toString method
  public function __toString() {
    return "(" . $this->x . ", " . $this->y . ")";
  }
}
?>