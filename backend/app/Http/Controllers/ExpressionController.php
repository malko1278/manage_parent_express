<?php

namespace App\Http\Controllers;
use App\Models\Expression;
use Illuminate\Http\Request;
use App\Helpers\ExpressionHelper;

class ExpressionController extends Controller {
    /**
     * Evaluates if an expression is correctly parenthesized
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function evaluateExpression(Request $request) {
        // Validate the request
        $request->validate([
            'expression' => 'required|string',
        ]);

        // Retrieve the expression from the request
        $expression = $request->input('expression');

        // Check if the expression is correctly parenthesized
        $is_valid = ExpressionHelper::isCorrectlyParenthesized($expression);

        // Save the expression in the database
        $expressionRecord = Expression::create([
            'expression' => $expression,
            'is_valid' => $is_valid,
        ]);

        // Return a JSON response
        return response()->json([
            'message' => $is_valid ? 'The expression is correctly parenthesized' : 'The expression is not properly parenthesized',
            'expression' => $expressionRecord->expression,
            'is_valid' => $expressionRecord->is_valid,
        ]);
    }
}
