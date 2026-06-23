<?php

class LuckyNumbers
{
    public function sumUp(array $digitsOfNumber1, array $digitsOfNumber2): int
    {
        return intval(implode("", $digitsOfNumber1)) + intval(implode("", $digitsOfNumber2));
    }

    public function isPalindrome(int $number): bool
    {
        $x = array_map("intval", str_split($number));
        if ($x == array_reverse($x)) {
            return true;
        } else {
            return false;
        }
    }

    public function validate(string $input): string
    {
        if ($input === '') {
            return "Required field";
        }
        
        if ((int) $input > 0) {
            return "";
        }
    
        return "Must be a whole number larger than 0";
    }
}
