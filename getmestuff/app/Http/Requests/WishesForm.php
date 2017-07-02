<?php

namespace App\Http\Requests;

use App\GlobalSettings;
use Illuminate\Foundation\Http\FormRequest;

class WishesForm extends FormRequest
{
    protected $wishFields = ['item', 'url', 'current_amount', 'amount_needed'];
    protected $addressFields = ['address_one', 'address_two', 'city', 'post_code', 'country'];

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'item' => 'required|string|spamfree|maxwish',
            'url' => 'required|url',
            'current_amount' => 'nullable|numeric|min:0',
            'amount_needed' => 'required|numeric|min:1',
            'address_one' => 'required|string',
            'address_two' => 'nullable|string',
            'city' => 'required|alpha_num',
            'post_code' => 'required|alpha_num',
            'country' => 'required|alpha_num'
        ];
    }

    public function save()
    {
        if ($this->canRequestWish()) {
            throw new \Exception('You have published a maximum amount of wishes');
        }

        list($wish, $address) = $this->getWishFields();

        $this->saveUserData($address);

        $this->user()->wishes()->create($wish);

        $this->user()->recordAchievements(1, [3]);
    }

    protected function canRequestWish()
    {
        $allowed_wishes = GlobalSettings::getSettings('default_wishes_allowance')->data['value'] + $this->user()->allowed_wishes;
        return ($this->user()->wishes->where('completed', '==', 0)->count() == $allowed_wishes
            || $this->user()->number_of_wishes == 0);
    }

    protected function saveUserData($address)
    {
        $this->user()->settings()->saveAddress($address);

        if ($this->user()->priority > 0) {
            $this->user()->priority--;
            $wish['priority'] = 2;
        }

        $this->user()->number_of_wishes--;
        $this->user()->save();
    }

    protected function getWishFields()
    {
        $items = $this->intersect($this->wishFields);
        $patterns = GlobalSettings::getSettings('word_replacements')->data;
        $address = collect($this->intersect($this->addressFields))->map(function ($item) {return ucwords($item);})
            ->toArray();

        $items['item'] = ucfirst($items['item']);

        foreach ($patterns as $pattern) {
            $items['item'] = preg_replace("/$pattern/i", $pattern, $items['item']);
        }

        $items['address'] = $address;

        return [$items, $address];
    }
}
