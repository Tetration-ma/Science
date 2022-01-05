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
    protected ArrayObject $c; // min cT x
    protected ArrayObject $A_ub; // inequalities matrix
    protected ArrayObject $b_ub; // inequalities vector
    protected ArrayObject $A_eq; // equalities matrix
    protected ArrayObject $b_eq; // equalities vector
    protected ArrayObject $bounds; // bounds I <= x <= u

    public function __construct($c, $A_ub, $b_ub, $A_eq=null, $b_eq=null, $bounds=null)
    {
        $this->c = $c;
        $this->A_ub = $A_ub;
        $this->b_ub = $b_ub;
        $this->A_eq = $A_eq;
        $this->b_eq = $b_eq;
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