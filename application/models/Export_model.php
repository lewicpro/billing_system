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

class Export_model extends CI_Model
{


    public function customers()
    {


        $this->db->select('*');
        $this->db->from('customers');

        $query = $this->db->get();
        $result = $query->result_array();
        return $result;

    }


}