<?php

class Calculator {

    public function evaluate($expression) {
        try {
            if (!$this->isValid($expression)) {
                throw new Exception("Invalid input");
            }

            $result = 0;
            eval("\$result = $expression;");

            if (!isset($result) || is_nan($result)) {
                throw new Exception("Invalid result");
            }

            return $result;

        } catch (Throwable $e) {
            return "Error!";
        }
    }

    public function squareRoot($expression) {
        try {
            if (!$this->isValid($expression)) {
                throw new Exception("Invalid input");
            }

            $value = 0;
            eval("\$value = $expression;");
            $result = sqrt($value);

            if (is_nan($result)) {
                throw new Exception("Invalid sqrt");
            }

            return $result;

        } catch (Throwable $e) {
            return "Error!";
        }
    }

    private function isValid($expression) {
        return preg_match('#^[0-9+\-*/().% ]*$#', $expression);
    }
}