<?php

class feedback  {
    private $name;
    private $email;
    private $level;
    private $content;

    function __construct($name, $email, $level, $content) {
    $this->name = $name;
    $this->email = $email;
    $this->level = $level;
    $this->content = $content;
  }
}
