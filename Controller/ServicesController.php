<?php

class ServicesController extends AppController {
	public $components = array('RequestHandler');

	/**
	 * Returns the json representation of a xml document.
	 */
	public function xmlToJson() {
		if ($this->request->is('post')) {
			$this->set('result', json_encode($this->request->data));
			$this->set('_serialize', array('result'));
		}
	}
}
