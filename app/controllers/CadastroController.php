<?php 

class CadastroController extends \HXPHP\System\Controller
{

	public function cadastrarAction()
	{
		$this->view->setFile('index');

		$this->request->setCustomFilters(array(
			'email' => FILTER_VALIDATE_EMAIL

		));

		var_dump($this->request->post());

		//Gerar Senha
		//Obter Role_id
	}	
	
}