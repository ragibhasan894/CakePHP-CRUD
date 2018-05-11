
<?php
	
	class TopicsController extends AppController {

		public function add() {
			if($this->request->is('post')) {
				$this->Topic->create();
				$this->Topic->save($this->request->data);
			}
		}

	}



?>