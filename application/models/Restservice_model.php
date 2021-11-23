<?php
/**
 * Aleco Tanzania -  Accounting,  Invoicing  and CRM Software
 * Copyright (c) Rajesh Dukiya. All Rights Reserved
 * ***********************************************************************
 *
 *  Email: support@alecotz.com
 *  Website: https://www.alecotz.com
 *
 *  ************************************************************************
 *  * This software is furnished under a license and may be used and copied
 *  * only  in  accordance  with  the  terms  of such  license and with the
 *  * inclusion of the above copyright notice.
 *  * If you Purchased from Codecanyon, Please read the full License from
 *  * here- http://codecanyon.net/licenses/standard/
 * ***********************************************************************
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Restservice_model extends CI_Model
{

    public function customers($id = '')
    {

        $this->db->select('*');
        $this->db->from('customers');
        if ($id != '') {

            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query->result_array();
    }

    public function delete_customer($id)
    {
        return $this->db->delete('customers', array('id' => $id));
    }


}