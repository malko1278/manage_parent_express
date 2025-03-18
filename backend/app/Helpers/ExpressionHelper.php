<?php

namespace App\Helpers;

class ExpressionHelper {
    /**
     * Checks if a mathematical expression is correctly parenthesized.
     *
     * @param string $expression
     * @return bool
     */
    public static function isCorrectlyParenthesized(string $expression): bool {
        $stack = [];

        // Removes unnecessary spaces
        $expression = trim($expression);

        for ($i = 0; $i < strlen($expression); $i++) {
            $char = $expression[$i];

            if ($char === '(') {
                // Add an opening parenthesis to the stack
                array_push($stack, $char);
            } elseif ($char === ')') {
                // If a closing parenthesis is found, check that there is a match
                if (empty($stack)) {
                    // No corresponding opening parenthesis
                    return false;
                }
                // Remove the last opening bracket
                array_pop($stack);
            }
        }

        // If the stack is empty, all parentheses are correctly matched.
        $result = empty($stack);
        return $result;
    }
}
