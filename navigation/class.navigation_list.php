<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.navigation_list.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 13.10.2014, 14:51:58 with ArgoUML PHP module 
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
// section 10-30-43-55--1830a94e:148e54cccad:-8000:00000000000036CA-includes begin
// section 10-30-43-55--1830a94e:148e54cccad:-8000:00000000000036CA-includes end

/* user defined constants */
// section 10-30-43-55--1830a94e:148e54cccad:-8000:00000000000036CA-constants begin
// section 10-30-43-55--1830a94e:148e54cccad:-8000:00000000000036CA-constants end

/**
 * Short description of class navigation_list
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class navigation_list
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute data_array
     *
     * @access public
     * @var Integer
     */
    public $data_array = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function __construct()
    {
     $this->data_array = array();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  item
     */
    public function add_item($item)
    {
     $this->data_array[] = $item;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  n
     */
    public function get_item($n)
    {
     return $this->data_array[ $n ];
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_item_count()
    {
     return count( $this->data_array );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  list
     * @param  start
     */
    public function add_list($list, $start)
    {
     $count = $list->get_item_count();
     for ( $n=$start; $n < $count; $n++ )
     { $this->add_item( $list->data_array[$n] ); }
    }
}?>