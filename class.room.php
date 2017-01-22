<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.room.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 10.11.2016, 15:18:04 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include generated_room
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('generated/class.generated_room.php');

/* user defined includes */
// section 10-30--8--14-348ebe49:158441fe3ac:-8000:00000000000049A4-includes begin
// section 10-30--8--14-348ebe49:158441fe3ac:-8000:00000000000049A4-includes end

/* user defined constants */
// section 10-30--8--14-348ebe49:158441fe3ac:-8000:00000000000049A4-constants begin
// section 10-30--8--14-348ebe49:158441fe3ac:-8000:00000000000049A4-constants end

/**
 * Short description of class room
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class room
    extends generated_room
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute network_id
     *
     * @access public
     * @var Integer
     */
    public $network_id = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  network_id
     */
    public function set_network_id($network_id)
    {
     $this->network_id = $network_id;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  abbreviation
     */
    public function get_room($abbreviation)
    {
     if( defined('__DB_ROOT__') == FALSE )
     { define('__DB_ROOT__', dirname(__FILE__) ); }
     require_once(__DB_ROOT__.'/class.room_list_abbreviation.php');
     
     $list = new room_list_abbreviation();
     $list->set_owner_id( $this->network_id );
     $list->set_abbreviation( $abbreviation );
     $list->load_room_abbreviation();
     
     if( $list->get_item_count() > (int)0 )
     { return $list->get_item( (int)0 ); }
     else
     { return NULL; }
    }
}?>