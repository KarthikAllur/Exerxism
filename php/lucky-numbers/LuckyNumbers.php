<?php

class LuckyNumbers
{
    public function sumUp(array $digitsOfNumber1, array $digitsOfNumber2): int
    {
        //throw new \BadFunctionCallException("Implement the function");
        return implode($digitsOfNumber1)+implode($digitsOfNumber2);
    }

    public function isPalindrome(int $number): bool
    {
        $str2=(string)$number;
        $str1=strrev($str2);
       // if($str1===$str2)   return true;
        //else    return false;
        //throw new \BadFunctionCallException("Implement the function");
        return $str1==$str2;
    }

    public function validate(string $input): string
    {
        if($input==NULL)
        {
            return "Required field";
        }
        else if((int)$input<=0)
        {
            return 'Must be a whole number larger than 0';
        }
        else
        {
            return "";
        }
        //throw new \BadFunctionCallException("Implement the function");
    }
}
