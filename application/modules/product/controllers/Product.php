<?php

    class Product extends MY_Controller{
        public function index(){
            $this->page_load('index');
        }

        public function get_users(){

            $users = $this->MY_Model->getRows('user');

            foreach($users as $u):
                if($u['username'] == $this->session->userdata('username')){
                    $id = $u['user_id'];
                }

            endforeach;

            $limit = $this->input->post('length');
    		$offset = $this->input->post('start');
    		$search = $this->input->post('search');
    		$order = $this->input->post('order');
    		$draw = $this->input->post('draw');
    		$column_order = array('product_id','product_name','product_price');
    		$join = array(
                'user' => 'user.user_id = product.fk_user_id'
            );
    		$select = "*";
    		$where = array('fk_user_id' => $id);
            // if($this->session->userdata('user_type') == 1){
			//    $where['fk_user_id'] = $this->session->userdata('username');
		    // }

    		$group = array();
    		$list = $this->MY_Model->get_datatables('product',$column_order, $select, $where, $join, $limit, $offset ,$search, $order, $group);
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
            $product_id = $this->input->post('id');
    		$where = array( 'product_id' => $product_id );
    		$update = $this->MY_Model->delete('product', $where);

            echo json_encode($update);
	   }

       public function insertproduct()
	   {
           $users = $this->MY_Model->getRows('user');

           foreach($users as $u):
               if($u['username'] == $this->session->userdata('username')){
                   $id = $u['user_id'];
               }
           endforeach;
    		$product_name = $this->input->post('product_name');
    		$product_price = $this->input->post('product_price');

    		$add = array(
    			'fk_user_id' => $id,
    			'product_name' => $product_name,
    			'product_price' => $product_price
    		);

    		$insert = $this->MY_Model->insert('product', $add);
        //     $join = array('tbl_lead_order' => 'tbl_lead_order.user_id = tbl_users.user_id');
		// $group = array('tbl_lead_order.id');
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
