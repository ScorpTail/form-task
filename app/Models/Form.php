<?php

namespace App\Models;

use App\Casts\AdultTypeCast;
use App\Casts\ArrestTypeCast;
use App\Casts\ProblemSolveCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'forms';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'tt_number',
        'report_date',
        'arrest_type',
        'unpaid_goods',
        'adult_type',
        'problem_solve_type',
        'theft_time',
        'cam_and_registrator_number_1',
        'arrest_time',
        'cam_and_registrator_number_2',
        'pay_time',
        'cam_and_registrator_number_3',
        'thief_photo'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'arrest_type' => ArrestTypeCast::class,
        'adult_type' => AdultTypeCast::class,
        'problem_solve_type' => ProblemSolveCast::class,
    ];
}
