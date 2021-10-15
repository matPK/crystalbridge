<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\Round;

class NotOverStep implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $round = Round::find(request()->round_id);
        return $value <= $round->number_steps;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Não pode apostar num passo maior do que o configurado!';
    }
}
