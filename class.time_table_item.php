<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.time_table_item.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 08.12.2014, 13:40:05 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include generated_time_table_item
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('generated/class.generated_time_table_item.php');

/* user defined includes */
// section -64--88--78-21--7b3eebf6:1429904ccf4:-8000:0000000000002AB0-includes begin
// section -64--88--78-21--7b3eebf6:1429904ccf4:-8000:0000000000002AB0-includes end

/* user defined constants */
// section -64--88--78-21--7b3eebf6:1429904ccf4:-8000:0000000000002AB0-constants begin
// section -64--88--78-21--7b3eebf6:1429904ccf4:-8000:0000000000002AB0-constants end

/**
 * Short description of class time_table_item
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class time_table_item
    extends generated_time_table_item
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_day_number()
    {
     return date('N', strtotime( $this->get_item_date()));
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_selection_date()
    {
     return
     $this->get_day() . ". " . 
     $this->get_month() . ". " . 
     $this->get_year();
    }
}?>