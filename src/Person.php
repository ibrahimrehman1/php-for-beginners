<?php

namespace app;
class Person
{
    public string $personName;
    public function __construct()
    {
        $this->personName = 'Ibrahim Rehman';
        echo $this->personName;
    }
}

?>
