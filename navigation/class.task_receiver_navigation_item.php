<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.task_receiver_navigation_item.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 30.09.2015, 16:54:16 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include basic_item
 *
 * @author Bernd Schröder
 * @version 1.0
 */
require_once('class.basic_item.php');

/* user defined includes */
// section -87--2--7--80-61f3c603:14908579b5e:-8000:000000000000193E-includes begin
// section -87--2--7--80-61f3c603:14908579b5e:-8000:000000000000193E-includes end

/* user defined constants */
// section -87--2--7--80-61f3c603:14908579b5e:-8000:000000000000193E-constants begin
// section -87--2--7--80-61f3c603:14908579b5e:-8000:000000000000193E-constants end

/**
 * Short description of class task_receiver_navigation_item
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class task_receiver_navigation_item
    extends basic_item
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function __construct()
    {
     parent::__construct();
     $this->set_always_visible( TRUE );
     $this->set_show_value( TRUE );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  item
     */
    public function get_validate_value($item)
    {
     return 
     $item->get_active_receiver_undo_task_count() +
     $item->get_active_author_undo_task_count();
    }
}?>