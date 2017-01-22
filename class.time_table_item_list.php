<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.time_table_item_list.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 08.02.2015, 22:23:45 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include generated_time_table_item_list
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('generated/class.generated_time_table_item_list.php');

/* user defined includes */
// section 10-30-49-59-2d9b44d4:148162bc79e:-8000:0000000000001385-includes begin
// section 10-30-49-59-2d9b44d4:148162bc79e:-8000:0000000000001385-includes end

/* user defined constants */
// section 10-30-49-59-2d9b44d4:148162bc79e:-8000:0000000000001385-constants begin
// section 10-30-49-59-2d9b44d4:148162bc79e:-8000:0000000000001385-constants end

/**
 * Short description of class time_table_item_list
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class time_table_item_list
    extends generated_time_table_item_list
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute year
     *
     * @access public
     * @var Integer
     */
    public $year = null;

    /**
     * Short description of attribute month
     *
     * @access public
     * @var Integer
     */
    public $month = null;

    /**
     * Short description of attribute day
     *
     * @access public
     * @var Integer
     */
    public $day = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function set_binding()
    {
     $id = $this->get_owner_id();
     $this->stmt->bind_param('i', $id );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  year
     */
    public function set_year($year)
    {
     $this->year = $year;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  month
     */
    public function set_month($month)
    {
     $this->month = $month;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  day
     */
    public function set_day($day)
    {
     $this->day = $day;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load()
    {
     $where_statement = 
     "WHERE control_time_table_item_id=?";
     return $this->list_load( $where_statement );
    }
}?>