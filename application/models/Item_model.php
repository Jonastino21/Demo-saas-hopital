<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Item_model extends MY_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getItemByCategory($item_category_id)
    {
        $this->db->select('item.id,item.name,item.item_category_id,item_category.item_category,item_category.id as `item_category_id`');
        $this->db->from('item');
        $this->db->join('item_category', 'item_category.id = item.item_category_id');
        $this->db->where('item.item_category_id', $item_category_id);
        $this->db->order_by('item.id');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getItemunit($id)
    {
        $this->db->select('item.id,item.name,item.unit,item.item_category_id');
        $this->db->from('item');
        $this->db->where('item.id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function valid_check_exists($str)
    {
        $name             = $this->input->post('name');
        $id               = $this->input->post('id');
        $item_category_id = $this->input->post('item_category_id');
        if (!isset($id)) {
            $id = 0;
        }
        if ($this->check_data_exists($name, $item_category_id, $id)) {
            $this->form_validation->set_message('check_exists', 'Record already exists');
            return false;
        } else {
            return true;
        }
    }

    public function check_data_exists($name, $item_category_id, $id)
    {
        $this->db->where('name', $name);
        $this->db->where('item_category_id', $item_category_id);
        $this->db->where('id !=', $id);
        $query = $this->db->get('item');
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function get($id = null)
    {
        $query = "SELECT item.*,item_category.item_category,IFNULL(item_issues.issued,0) as `issued`,IFNULL(item_issues.returned,0) as `returned`,IFNULL(item_stock.item_stock_quantity,0) added_stock FROM `item` left JOIN item_category on item.item_category_id=item_category.id  JOIN (SELECT item_stock.item_id,sum(quantity) item_stock_quantity FROM `item_stock` group by item_stock.item_id) as item_stock on item_stock.item_id=item.id left JOIN (SELECT m.item_id as `issue_item_id`, IFNULL((SELECT SUM(quantity) FROM item_issue WHERE item_issue.item_id = m.item_id and item_issue.is_returned =1),0) as `issued` ,IFNULL((SELECT SUM(quantity) FROM item_issue WHERE item_issue.item_id = m.item_id and item_issue.is_returned =0),0) as `returned` FROM item_issue m GROUP BY item_id) as item_issues on item_issues.issue_item_id=item.id";

        if($id != null) {
            $query .= " where item.id =" . $id;
        }

        $query = $this->db->query($query);

        if ($id != null) {
            return $query->row_array();
        }

        return $query->result_array();
    }

    public function get_item_data($id){
        return $this->db->select('*')->from('item')->where('id',$id)->get()->row_array();
    }

    public function getAllitemRecord()
    {
        $this->datatables
            ->select('item.*,item_category.item_category,IFNULL(item_issues.issued,0) as `issued`,IFNULL(item_issues.returned,0) as `returned`,IFNULL(item_stock.item_stock_quantity,0) as added_stock, (item_stock.item_stock_quantity - item_issues.issued) as avlqty ')
            ->join('item_category', 'item.item_category_id=item_category.id', "LEFT")
            ->join('(SELECT item_stock.item_id,sum(quantity) item_stock_quantity FROM `item_stock` group by item_stock.item_id) as item_stock', 'item_stock.item_id=item.id', "left")
            ->join('(SELECT m.item_id as `issue_item_id`, IFNULL((SELECT SUM(quantity) FROM item_issue WHERE item_issue.item_id = m.item_id and item_issue.is_returned =1),0) as `issued` ,IFNULL((SELECT SUM(quantity) FROM item_issue WHERE item_issue.item_id = m.item_id and item_issue.is_returned =0),0) as `returned` FROM item_issue m GROUP BY item_id) as item_issues', 'item_issues.issue_item_id=item.id', "left")
            ->searchable('item.name,item_category.item_category,item.unit,item.description')
            ->orderable('item.name,item_category.item_category,item.unit," ",description ')
            ->sort('item.id', 'desc')
            ->from('item');
        return $this->datatables->generate('json');
    } 
 
    public function getItemAvailable($item_id = null)
    {
        $where = "";
        $query = "SELECT item.*,item_category.item_category,IFNULL(item_issues.issued,0) as `issued`,IFNULL(item_issues.returned,0) as `returned`,IFNULL(item_stock.item_stock_quantity,0) added_stock FROM `item` left JOIN item_category on item.item_category_id=item_category.id  left JOIN (SELECT item_stock.item_id,sum(quantity) item_stock_quantity FROM `item_stock` group by item_stock.item_id) as item_stock on item_stock.item_id=item.id left JOIN (SELECT m.item_id as `issue_item_id`, IFNULL((SELECT SUM(quantity) FROM item_issue WHERE item_issue.item_id = m.item_id and item_issue.is_returned =1),0) as `issued` ,IFNULL((SELECT SUM(quantity) FROM item_issue WHERE item_issue.item_id = m.item_id and item_issue.is_returned =0),0) as `returned` FROM item_issue m GROUP BY item_id) as item_issues on item_issues.issue_item_id=item.id where item.id= " . $item_id;
        $query = $this->db->query($query);
        if ($item_id != null) {
            return $query->row_array();
        }
    }

    public function remove($id)
    {  

        $this->db->trans_start(); # Starting Transaction
        $this->db->trans_strict(false); # See Note 01. If you wish can remove as well
        //=======================Code Start===========================
        $this->db->where('id', $id);
        $this->db->delete('item');
        $message = DELETE_RECORD_CONSTANT . " Where Item id " . $id;
        $action = "Delete";
        $record_id = $id;
        $this->log($message, $record_id, $action);
        //======================Code End==============================
        $this->db->trans_complete(); # Completing transaction
        /* Optional */
        if ($this->db->trans_status() === false) {
            # Something went wrong.
            $this->db->trans_rollback();
            return false;
        } else {
            //return $return_value;
        }
    }

    public function add($data)
    {   
        $this->db->trans_start(); # Starting Transaction
        $this->db->trans_strict(false); # See Note 01. If you wish can remove as well
        //=======================Code Start===========================
        if (isset($data['id']) && $data['id'] != '') {
            $this->db->where('id', $data['id']);
            $this->db->update('item', $data);
            $message = UPDATE_RECORD_CONSTANT . " For Item id " . $data['id'];
            $action = "Update";
            $record_id = $data['id'];
            $this->log($message, $record_id, $action);
        //======================Code End==============================
            $this->db->trans_complete(); # Completing transaction
            /* Optional */
            if ($this->db->trans_status() === false) {
                # Something went wrong.
                $this->db->trans_rollback();
                return false;
            } else {
                return $record_id;
            }
        } else {
            $this->db->insert('item', $data);
            $insert_id = $this->db->insert_id();
            $message = INSERT_RECORD_CONSTANT . " On Item id " . $insert_id;
            $action = "Insert";
            $record_id = $insert_id;
            $this->log($message, $record_id, $action);
            //======================Code End==============================
            $this->db->trans_complete(); # Completing transaction
            /* Optional */
            if ($this->db->trans_status() === false) {
                # Something went wrong.
                $this->db->trans_rollback();
                return false;
            } else {
                //return $return_value;
            }
            return $insert_id;
        }
    }
}
