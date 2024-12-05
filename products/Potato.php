<?php
require_once './Base.php';

class Potato extends Base
{
    public function __construct()
    {
        parent::__construct('Potato', 85, true);
    }
}
