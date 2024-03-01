<?php
defined('BASEPATH') or exit('No direct script access allowed');
class BaseModel extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function getQuery($query = NULL) {
        try {
            if ($query === NULL) {
                return NULL;
            } else {
                return $this->db->query($query);
            }
        }
        catch(Exception $e) {
            // Handle the exception, e.g., log the error or throw a custom exception
            return NULL;
        }
    }
    public function getData($tbl_name, $cond = NULL, $order_columns = [], $order_direction = 'ASC', $lim = NULL) {
        try {
            if ($cond !== NULL) {
                $this->db->where($cond);
            }
            if (!empty($order_columns) && is_array($order_columns)) {
                foreach ($order_columns as $column) {
                    $this->db->order_by($column, $order_direction);
                }
            }
            if ($lim !== NULL) {
                $this->db->limit($lim);
            }
            return $this->db->get($tbl_name);
        }
        catch(Exception $e) {
            // Handle the exception, e.g., log the error or throw a custom exception
            return NULL;
        }
    }
    public function updateData($tbl_name, $data, $cond = NULL) {
        try {
            if ($cond !== NULL) {
                $this->db->where($cond);
                return $this->db->update($tbl_name, $data);
            } else {
                return -1;
            }
        }
        catch(Exception $e) {
            // Handle the exception, e.g., log the error or throw a custom exception
            return -1;
        }
    }
    public function insertData($tbl_name, $data) {
        try {
            return $this->db->insert($tbl_name, $data);
        }
        catch(Exception $e) {
            // Handle the exception, e.g., log the error or throw a custom exception
            return false;
        }
    }
    public function deleteData($tbl_name, $cond = NULL) {
        try {
            if ($cond !== NULL) {
                $this->db->where($cond);
            }
            return $this->db->delete($tbl_name);
        }
        catch(Exception $e) {
            // Handle the exception, e.g., log the error or throw a custom exception
            return false;
        }
    }
    public function likeData($tbl_name, $like = NULL) {
        try {
            if ($like !== NULL) {
                $this->db->like($like);
            }
            return $this->db->get($tbl_name);
        }
        catch(Exception $e) {
            // Handle the exception, e.g., log the error or throw a custom exception
            return NULL;
        }
    }
    public function getJoinData($tbl1, $tbl2, $joinCond, $order = NULL) {
        try {
            $this->db->select('*,' . $tbl1 . '.Id as ID');
            $this->db->from($tbl1);
            $this->db->join($tbl2, $joinCond);
            if ($order !== NULL) {
                $this->db->order_by($order, 'DESC');
            }
            return $this->db->get();
        }
        catch(Exception $e) {
            // Handle the exception, e.g., log the error or throw a custom exception
            return NULL;
        }
    }
    public function downloadFile($cond) {
        try {
            $this->db->select('*');
            $this->db->from('upload');
            $this->db->join('menu_master', 'upload.menu_id = menu_master.id', 'left');
            $this->db->where($cond);
            return $this->db->get();
        }
        catch(Exception $e) {
            // Handle the exception, e.g., log the error or throw a custom exception
            return NULL;
        }
    }
    public function insertVisitor($ipAddress, $userAgent) {
        $data = array('ip_address' => $ipAddress, 'user_agent' => $userAgent, 'timestamp' => date('Y-m-d H:i:s'));
        $this->db->insert('visitors', $data);
    }
    public function isUniqueVisitor($ipAddress, $userAgent) {
        $this->db->where('ip_address', $ipAddress);
        $this->db->where('user_agent', $userAgent);
        $query = $this->db->get('visitors');
        return $query->num_rows() == 0;
    }
    public function getDataByStatus($statusArray) {
        $this->db->where_in('status', $statusArray);
        return $this->db->get('eoi_registration')->result_array();
    }
    public function getUserData($user_id) {
        $this->db->select('*');
        $this->db->from('login');
        $this->db->join('eoi_registration', 'login.user_id = eoi_registration.user_id');
        $this->db->where('login.user_id', $user_id);
        $query = $this->db->get();
        return $query;
    }
    public function getEventApplicationData($user_id) {
        $this->db->select('*');
        $this->db->from('login');
        $this->db->join('event_registration', 'login.user_id = event_registration.user_id');
        $this->db->where('login.user_id', $user_id);
        $query = $this->db->get();
        return $query->row();
    }
    public function getEventApplicationList($status = null) {
        $this->db->select('*');
        $this->db->from('login');
        $this->db->join('event_registration', 'login.user_id = event_registration.user_id');
        if ($status !== null) {
            $this->db->where('event_registration.status', $status);
        }
        $query = $this->db->get();
        return $query->result();
    }
    public function getUserList($is_verified = null) {
        $this->db->select('*');
        $this->db->from('login');
        $this->db->where('user_level', 2);

        if ($is_verified !== null) {
            $this->db->where('login.is_verified', $is_verified);
        }

        $query = $this->db->get();
        return $query->result();
    }
    public function getEoIApplicationData($user_id) {
        $this->db->select('*');
        $this->db->from('login');
        $this->db->join('eoi_registration', 'login.user_id = eoi_registration.user_id');
        $this->db->where('login.user_id', $user_id);
        $query = $this->db->get();
        return $query->row();
    }
}
