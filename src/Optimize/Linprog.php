<?php

namespace Tetration\Science\Optimize;

use \ArrayObject;

/**
 * Linear programming: minimize/maximize a linear objective function subject to
 * linear equality and inequality constraints.
 *
 * @package Tetration\Science\Optimize
 * @author Achraf Soltani
 * @access public
 * @see https://github.com/Tetration-ma/Science
 */
class Linprog
{
    protected ArrayObject $c;
    protected ArrayObject $A_ub;
    protected ArrayObject $b_ub;
    protected array $bounds;

    public function __construct($c, $A_ub, $b_ub, $bounds=array(0, null))
    {
        $this->c = $c;
        $this->A_ub = $A_ub;
        $this->b_ub = $b_ub;
        $this->bounds = $bounds;
    }

    public function minimize(){}

    public function maximize(){}

    private function IdentifyCornerPoints() { /* Todo : Identify the coordinates of all corner points of the feasible region */ }
    private function IdentifyTheObjectiveFunction() { /* Todo : Find the objective function */ }
    private function Evaluate() {
        /* Todo : Evaluate the objective function at all of these corner points
                  and pick the best corner point
        */
    }
}