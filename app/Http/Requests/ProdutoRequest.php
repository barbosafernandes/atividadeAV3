<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProdutoRequest extends Request {

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
			'nome' => 'required|min:3',
                        'valor' => 'required|numeric',
                        'quantidade' => 'required|numeric',
                        'descricao' => 'required|max:255',
                        'tamanho' => 'required|max:100'
		];
	}
        
        public function messages() {
            return [
                'nome.required' => 'O nome é obrigatório',
                'valor.required' => 'O valor é obrigatório',
                'quantidade.required' => 'O quantidade é obrigatório',
                'descricao.required' => 'O descrição é obrigatório',
                'tamanho.required' => 'O tamanho é obrigatório'
            ];
        }

}
