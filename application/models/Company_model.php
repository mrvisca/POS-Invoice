<?php

class Company_model extends CI_Model
{

    protected $company = 'company';

    function __construct()
    {
        parent::__construct();
    }

    /**
     * Get company by id
     *
     * @param $id -
     *            primary key to get record
     *            
     */
    function get_company($id)
    {
        $result = $this->db->get_where('company', array(
            'id' => $id
        ))->row_array();
        $db_error = $this->db->error();
        if (! empty($db_error['code'])) {
            echo 'Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message'];
            exit();
        }
        return $result;
    }

    /**
     * Get all company
     */
    function get_all_company()
    {
        $this->db->order_by('id', 'desc');
        $result = $this->db->get('company')->result_array();
        $db_error = $this->db->error();
        if (! empty($db_error['code'])) {
            echo 'Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message'];
            exit();
        }
        return $result;
    }

    /**
     * Get limit company
     *
     * @param $limit -
     *            limit of query , $start - start of db table index to get query
     *            
     */
    function get_limit_company($limit, $start)
    {
        $this->db->order_by('id', 'desc');
        $this->db->limit($limit, $start);
        $result = $this->db->get('company')->result_array();
        $db_error = $this->db->error();
        if (! empty($db_error['code'])) {
            echo 'Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message'];
            exit();
        }
        return $result;
    }

    /**
     * Count company rows
     */
    function get_count_company()
    {
        $result = $this->db->from("company")->count_all_results();
        $db_error = $this->db->error();
        if (! empty($db_error['code'])) {
            echo 'Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message'];
            exit();
        }
        return $result;
    }

    /**
     * function to add new company
     *
     * @param $params -
     *            data set to add record
     *            
     */
    function add_company($params)
    {
        $this->db->insert('company', $params);
        $id = $this->db->insert_id();
        $db_error = $this->db->error();
        if (! empty($db_error['code'])) {
            echo 'Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message'];
            exit();
        }
        return $id;
    }

    /**
     * function to update company
     *
     * @param $id -
     *            primary key to update record,$params - data set to add record
     *            
     */
    function update_company($id, $params)
    {
        $this->db->where('id', $id);
        $status = $this->db->update('company', $params);
        $db_error = $this->db->error();
        if (! empty($db_error['code'])) {
            echo 'Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message'];
            exit();
        }
        return $status;
    }

    /**
     * function to delete company
     *
     * @param $id -
     *            primary key to delete record
     *            
     */
    function delete_company($id)
    {
        $status = $this->db->delete('company', array(
            'id' => $id
        ));
        $db_error = $this->db->error();
        if (! empty($db_error['code'])) {
            echo 'Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message'];
            exit();
        }
        return $status;
    }
}
