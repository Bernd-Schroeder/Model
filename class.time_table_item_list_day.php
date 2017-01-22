<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.time_table_item_list_day.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 28.10.2014, 15:26:50 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include time_table_item_list
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.time_table_item_list.php');

/* user defined includes */
// section 10-30-49-72--5360f815:1485918914a:-8000:00000000000015E5-includes begin
// section 10-30-49-72--5360f815:1485918914a:-8000:00000000000015E5-includes end

/* user defined constants */
// section 10-30-49-72--5360f815:1485918914a:-8000:00000000000015E5-constants begin
// section 10-30-49-72--5360f815:1485918914a:-8000:00000000000015E5-constants end

/**
 * Short description of class time_table_item_list_day
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class time_table_item_list_day
    extends time_table_item_list
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function set_binding()
    {
     $owner_id = $this->get_owner_id();
     $this->stmt->bind_param('iiii', 
     $owner_id, $this->year, 
     $this->month, $this->day );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load()
    {
     $where_statement = 
     "WHERE
     team_id=? AND 
     year=? AND 
     month=? AND 
     day=?";
     return $this->list_load( $where_statement );
    }
}?>