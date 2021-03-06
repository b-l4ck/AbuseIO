<?php

namespace AbuseIO\Http\Requests;

use AbuseIO\Http\Requests\Request;

class NetblockFormRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     * @return array
     */
    public function rules()
    {
        return [
            'first_ip'      => 'required|ip',
            'last_ip'       => 'required|ip',
            'contact_id'    => 'required|integer',
            'description'   => 'required',
        ];
    }
}
