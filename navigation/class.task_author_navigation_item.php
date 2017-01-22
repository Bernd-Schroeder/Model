<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.task_author_navigation_item.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 01.04.2015, 10:17:21 with ArgoUML PHP module 
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

/**
 * include basic_navigation
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.basic_navigation.php');

/* user defined includes */
// section 10-30-49-73--68428b49:1454ba0389f:-8000:0000000000002CBC-includes begin
// section 10-30-49-73--68428b49:1454ba0389f:-8000:0000000000002CBC-includes end

/* user defined constants */
// section 10-30-49-73--68428b49:1454ba0389f:-8000:0000000000002CBC-constants begin
// section 10-30-49-73--68428b49:1454ba0389f:-8000:0000000000002CBC-constants end

/**
 * Short description of class task_author_navigation_item
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class task_author_navigation_item
    extends basic_item
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd : 

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
     return $item->get_active_author_undo_task_count();
    }
}?>