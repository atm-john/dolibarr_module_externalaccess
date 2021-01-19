<?php

require_once __DIR__ . '/templatehook.class.php';

/**
 * Class TemplateHook
 * au cas ou il y ai besoin de plus de controle sur l'affichage des hook type template
 * comme par exemple pouvoir modifer des variables dans le template
 */
class TemplateHookManager{

	/**
	 * @var TemplateHook[] $templateHooks
	 */
	protected $templateHooks = array();

	/**
	 * @param string $hookName
	 * @param string $html
	 * @return bool
	 */
	public function setHookContent($hookName, $html){
		if(!empty($hookName)){

			if(!isset($this->templateHooks[$hookName])){
				$this->templateHooks[$hookName] = new TemplateHook();
			}

			$this->templateHooks[$hookName]->setHtml($html);

			return true;
		}

		return false;
	}


	/**
	 * @param $hookName
	 */
	public function hook($hookName){
		if(!empty($hookName) && isset($this->templateHooks[$hookName]) && is_object($this->templateHooks[$hookName])){
			return $this->templateHooks[$hookName]->output();
		}
		return '';
	}
}
