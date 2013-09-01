<?php
namespace App\Controller;

class Fairies extends \App\Page {

	public function action_index() {
	
		//Show a list of fairies
		$this->view->subview = 'list';
		
		//Find all fairies and pass them to the view
		$this->view->fairies = $this->pixie->orm->get('fairy')->find_all();

                $this->view->count = $this->pixie->orm->get('fairy')->count_all();
	}
	
	public function action_view() {
	
		//Show the single fairy page
		$this->view->subview = 'view';
		
		//Get the ID of the fairy from URL parameters
		$id = $this->request->param('id');
		
		//Find a fairy by ID and pass her to the view
		$this->view->fairy = $this->pixie->orm->get('fairy', $id);

                

                $this->view->count = $this->pixie->orm->get('fairy')->count_all();
	}
	
	public function action_add() {
		
		//If the HTTP method is 'POST'
		//it means that the form got submitted
		//and we should process it
		if ($this->request->method == 'POST') {
			
			//Create a new fairy
			$fairy = $this->pixie-> orm->get('fairy');
			
			//Set her name from the form POST data
			$fairy->name = $this->request->post('name');

                        //Set her tree from the form POST data
			$fairy->tree_id = $this->request->post('tree_id');
			
			//Set her interests from the form POST data
			$fairy->interests = $this->request->post('interests');
			
			//Save her
			$fairy->save();
			
			//And redirect the user back to the list
			return $this->redirect('/');
		}
		
		//Show the form
		$this->view->subview = 'add';
	}

        public function action_edit() {
                
		$id = $this->request->param('id');
                $fairy = $this->pixie->orm->get('fairy')->where('id', $id)->find();
                if($this->request->method == 'POST'){


                        //Set her name from the form POST data
                       $fairy->name = $this->request->post('name');

                       //Set her tree from the form POST data
			$fairy->tree_id = $this->request->post('tree_id');

                        //Set her interests from the form POST data
                       $fairy->interests = $this->request->post('interests');

                        //Save her
                       $fairy->save();

                       //And redirect the user back to the list
		       return $this->redirect('/');	
                 }

                $this->view->fairy = $fairy;	
                //Show the form
                $this->view->subview = 'edit';
        }

        public function action_delete() {

		$id = $this->request->param('id');
                $fairy = $this->pixie->orm->get('fairy')->where('id', $id)->find();
		
		if($fairy->loaded()){
                							
						
			//delete her
			$fairy->delete();
			
			//And redirect the user back to the list
			return $this->redirect('/');
		}
		
		
	}
        
        public function action_tree() {
                
		$this->view->subview = 'tree';

                $id = $this->request->param('id');

                $tree=$pixie->orm->get('tree')->where('id','$id')->find();

                $tree->fairies
                     ->find_all();
                     ->count all();

               		        	
        }

        



}