<?php

namespace App\Http\Requests\Form;

use App\Enums\AdultTypeEnum;
use App\Enums\ArrestTypeEnum;
use App\Enums\ProblemSolveEnum;
use Illuminate\Support\Carbon;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'tt_number' => ['required', 'integer', 'max:9999', 'min:1'],
            'report_date' => ['required', 'date'],
            'arrest_type' => ['required', 'integer', Rule::enum(ArrestTypeEnum::class)],
            'unpaid_goods' => ['required', 'integer'],
            'adult_type' => ['required', 'integer',  Rule::enum(AdultTypeEnum::class)],
            'problem_solve_type' => ['required', 'integer', Rule::enum(ProblemSolveEnum::class)],
            'problem_solve_text' => ['required_if:problem_solve_type,5', 'string', 'max:255'],
            'theft_time' => ['required', 'date'],
            'cam_and_registrator_number_1' => ['required', 'string', 'max:255'],
            'arrest_time' => ['required', 'date'],
            'cam_and_registrator_number_2' => ['required', 'string', 'max:255'],
            'pay_time' => ['required', 'date'],
            'cam_and_registrator_number_3' => ['required', 'string', 'max:255'],
            'thief_photo' => ['required', 'image', 'max:8192', 'mimes:png,jpg,gif,jpeg,webp'],
        ];
    }

    protected function prepareForValidation()
    {
        if (empty($this->arrest_date)) {
            $this->merge(['report_date' => Carbon::now()->toDateString()]);
        }
    }
}
