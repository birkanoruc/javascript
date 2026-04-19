<?php

declare(strict_types=1); // strict mode

class Calculator
{
    /**
     * Toplama metodu
     * @param int|float $a
     * @param int|float $b
     * @return float
     */
    public function addition(int|float $a, int|float $b): int|float
    {
        return $a + $b;
    }

    /**
     * Çıkartma metodu
     * @param int|float $a
     * @param int|float $b
     * @return float
     */
    public function subtraction(int|float $a, int|float $b): int|float
    {
        return $a - $b;
    }

    /**
     * Çarpma metodu
     * @param int|float $a
     * @param int|float $b
     * @return float
     */
    public function multiplication(int|float $a, int|float  $b): int|float
    {
        return $a * $b;
    }

    /**
     * Bölme metodu
     * @param int|float $a
     * @param int|float $b
     * @return float
     */
    public function division(int|float  $a, int|float  $b): int|float
    {
        if ($b == 0) {
            throw new Exception("Division by zero");
        }

        return $a / $b;
    }

    /**
     * Mod alma metodu
     * @param int|float $a
     * @param int|float $b
     * @return int
     */
    public function modulo(int|float  $a, int|float  $b): int|float
    {
        return $a % $b;
    }

    /**
     * Üs alma metodu
     * @param int|float $a
     * @param int|float $b
     * @return float
     */
    public function exponentiation(int|float $a, int|float $b): int|float
    {
        return $a ** $b;
    }
}

// Integration Tests
try {
    $calculator = new Calculator();
    assert($calculator->addition(2, 3) === 5);
    assert($calculator->subtraction(5, 3) === 2);
    assert($calculator->multiplication(4, 3) === 12);
    assert($calculator->division(10, 2) === 5);
    assert($calculator->modulo(10, 2) === 0);
    assert($calculator->exponentiation(10, 2) === 100);
    echo "All tests passed.";
} catch (Exception $e) {
    echo "Test failed: " . $e->getMessage();
}
