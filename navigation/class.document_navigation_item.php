<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.document_navigation_item.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 11.11.2014, 10:58:51 with ArgoUML PHP module 
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
// section 10-30-43-55--1830a94e:148e54cccad:-8000:00000000000018B8-includes begin
// section 10-30-43-55--1830a94e:148e54cccad:-8000:00000000000018B8-includes end

/* user defined constants */
// section 10-30-43-55--1830a94e:148e54cccad:-8000:00000000000018B8-constants begin
// section 10-30-43-55--1830a94e:148e54cccad:-8000:00000000000018B8-constants end

/**
 * Short description of class document_navigation_item
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class document_navigation_item
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
     $this->set_always_visible( FALSE );
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
     return $item->get_document_list_count();
    }
}?>