<?php
require_once './Base.php';

class Raspberry extends Base
{
    public function __construct()
    {
        parent::__construct('Raspberry', 30, false);
    }
}
