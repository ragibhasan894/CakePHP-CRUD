<?php

	class PostController extends AppController {

		public $components = array('Session');

		public function index() {
			$data = $this->Post->find('all');
			$this->set('posts',$data);
		}

		public function add() {
			if($this->request->is('post')) {
				$this->Post->create();
				if($this->Post->save($this->request->data)) {
					$this->Session->setFlash('Post created successfully!');
					//$this->redirect('index');
				}
			}

			$this->set('topics',$this->Post->Topic->find('list'));
		}

		public function view($id) {
			$data = $this->Post->findById($id);
			$this->set('post',$data);
		}

	}

?>