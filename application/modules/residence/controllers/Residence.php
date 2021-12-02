<?php

    class Residence extends MY_Controller{
        public function index(){
            $this->page_load('index');
        }

        public function get_users(){
            $limit = $this->input->post('length');
    		$offset = $this->input->post('start');
    		$search = $this->input->post('search');
    		$order = $this->input->post('order');
    		$draw = $this->input->post('draw');
    		$column_order = array('user_id','name');
    		$join = array();
    		$select = "*";
    		$where = array("user_type <>" => 0);
    		$group = array();
    		$list = $this->MY_Model->get_datatables('user',$column_order, $select, $where, $join, $limit, $offset ,$search, $order, $group);
    		$output = array(
    				"draw" => $draw,
    				"recordsTotal" => $list['count_all'],
    				"recordsFiltered" => $list['count'],
    				"data" => $list['data']
    		);
    		echo json_encode($output);
	   }

       public function delete()
       {
            $user_id = $this->input->post('id');
    		$where = array( 'user_id' => $user_id );
    		$update = $this->MY_Model->delete('user', $where);

            echo json_encode($update);
	   }

       public function insertuser()
	   {
    		$name = $this->input->post('uname');
    		$username = $this->input->post('user_name');
    		$password = $this->input->post('password');

    		$add = array(
    			'name' => $name,
    			'username' => $username,
    			'password' => $password,
    		);

    		$insert = $this->MY_Model->insert('user', $add);
    		echo json_encode($insert);
	   }

       public function edit_user(){
    		$user_id = $this->input->post('user_id');
            $name = $this->input->post('uname');
    		$username = $this->input->post('user_name');
    		$password = $this->input->post('password');

    		$set = array(
    			'name' => $name,
    			'username' => $username,
    			'password' => $password,
    		);

    		$where = array(
    			'user_id' => $user_id
    		);

    		$update = $this->MY_Model->update('user', $set, $where);

    		echo json_encode($update);
	       }

    }


















?>
