<?php

namespace FireflyIII\Http\Requests;

use Auth;
use FireflyIII\Models\Budget;
use Input;

/**
 * Class BudgetFormRequest
 *
 * @package FireflyIII\Http\Requests
 */
class BudgetFormRequest extends Request
{
    /**
     * @return bool
     */
    public function authorize()
    {
        // Only allow logged in users
        return Auth::check();
    }

    /**
     * @return array
     */
    public function rules()
    {

        $nameRule = 'required|between:1,100|uniqueObjectForUser:budgets,name,encrypted';
        if (Budget::find(Input::get('id'))) {
            $nameRule = 'required|between:1,100|uniqueObjectForUser:budgets,name,encrypted,' . intval(Input::get('id'));
        }

        return [
            'name'   => $nameRule,
            'active' => 'numeric|between:0,1'
        ];
    }
}
