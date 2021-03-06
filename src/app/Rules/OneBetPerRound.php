<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\Bet;

class OneBetPerRound implements Rule
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
        return !(Bet::where([
            'bettor_name' => $value,
            'round_id' => request()->round_id,
        ])->exists());
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Uma aposta por apostador por rodada!';
    }
}
