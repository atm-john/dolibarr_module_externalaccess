<?php

/**
 * Class TemplateHook
 * au cas ou il y ai besoin de plus de controle sur l'affichage des hook type template
 * comme par exemple pouvoir modifer des variables dans le template
 */
class TemplateHook{

	/**
	 * @var $html
	 */
	public $html;

	/**
	 * Tableau de variables de remplacement
	 * @var array $vars
	 */
	public $vars;

	/**
	 * @param string $html
	 */
	public function setHtml($html){
		$this->html;
	}

	/**
	 * // TODO : add var replacement
	 * set template values from array
	 * @param array $vars
	 */
	public function setVars($vars){
		if(!is_array($vars)){
			if(empty($vars)) { return; }

			foreach ($vars as $varName => $value){
				$this->setVar($varName, $value);
			}
		}
	}

	/**
	 * set template values
	 * @param string $varname
	 * @param mixed $value
	 * @param bool $append
	 */
	public function setVar($varname, $value){
		if(empty($varname)) { return; }
		$this->vars[$varname] = $value;
	}

	public function output(){

		// TODO : add var replacement

		return $this->html;
	}
}
