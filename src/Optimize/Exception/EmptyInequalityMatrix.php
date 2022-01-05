<?php

namespace Tetration\Science\Optimize\Exception;

use \Exception;
use JetBrains\PhpStorm\Pure;

class EmptyInequalityMatrix extends Exception
{
    #[Pure] public function __construct()
    {
        $this->code = "000";
        $this->message = "The inequalities matrix is empty";
        parent::__construct();
    }
}