<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expression extends Model {
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        // Field to store the mathematical expression
        'expression',
        // Field to indicate if the expression is correctly parenthesized
        'is_valid',
    ];
    /**
     * Attributes that are not mass assignable
     *
     * @var array
     */
    protected $guarded = [];
}
