<?php

class BaseController extends \Controller {

	protected $layout = NULL;
	protected $_template = NULL;

	public function __construct()
    {
    	// render page after settings all business logics
        $this->afterFilter('@render_page'); 
    }

	/**
	 * Setup the layout used by the controller. Filter Function
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

	/**
	 * Render page
	 *
	 * @return void
	 */
	public function render_page()
	{
		// render template if action specified a template to render
		if( ! is_null($this->_template) )
		{
			return $this->layout->content = $this->_template;
		}
	}
}
