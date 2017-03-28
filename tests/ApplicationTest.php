<?php

namespace Star;

use Star\Expressions\StarString;
use Star\Procedures\ThrowException;

final class ApplicationTest extends \PHPUnit_Framework_TestCase
{
    public function test_it_do_procedure_when_expression_is_true()
    {
        $this->setExpectedException(\Exception::class, 'Pass');

        Application::execute(new ThrowException(new StarString('Pass')))
            ->when(Expr::booleanTrue()->isSame(Expr::BooleanTrue()))
        ;
    }

    public function test_not_execute_procedure_when_expression_is_false()
    {
        Application::execute(new ThrowException(new StarString('Pass')))
            ->when(Expr::booleanTrue()->isSame(Expr::BooleanFalse()))
        ;
        $this->assertTrue(true);
    }

    public function test_it_should_execute_procedure_when_both_conditions_are_true()
    {
        $this->setExpectedException(\Exception::class, 'Pass');
        Application::execute(new ThrowException(new StarString('Pass')))
            ->when(Expr::booleanTrue()->andX(Expr::BooleanTrue()->isSame(Expr::BooleanTrue())))
        ;
    }

    public function test_it_should_execute_procedure_when_one_conditions_is_false()
    {
        Application::execute(new ThrowException(new StarString('Pass')))
            ->when(Expr::booleanTrue()->andX(Expr::BooleanFalse()->isSame(Expr::BooleanTrue())))
        ;
    }

    public function test_procedure_should_be_allowed_to_receive_arguments()
    {
        $this->setExpectedException(\Exception::class, 'message');

        Application::execute(new ThrowException())
            ->with(new StarString('message'))
            ->when(Expr::BooleanTrue()->isSame(Expr::BooleanTrue()))
        ;
    }
}

