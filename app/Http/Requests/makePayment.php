<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class makePayment extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			//
			'payment_amount' => 'required',
			'payment_type' => 'required',
			'deposit_slip' => 'required|image',
			//'phone_number' => 'required',
			//'firstName' => 'required|min:3',
			//'lastName' => 'required|min:3',
		];
	}

}
