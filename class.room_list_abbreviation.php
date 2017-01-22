<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.room_list_abbreviation.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 09.11.2016, 09:43:45 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include room_list
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.room_list.php');

/* user defined includes */
// section 10-30--8--14--61d6b318:158481cb5f2:-8000:0000000000001796-includes begin
// section 10-30--8--14--61d6b318:158481cb5f2:-8000:0000000000001796-includes end

/* user defined constants */
// section 10-30--8--14--61d6b318:158481cb5f2:-8000:0000000000001796-constants begin
// section 10-30--8--14--61d6b318:158481cb5f2:-8000:0000000000001796-constants end

/**
 * Short description of class room_list_abbreviation
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class room_list_abbreviation
    extends room_list
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute abbreviation
     *
     * @access public
     * @var String
     */
    public $abbreviation = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  abbreviation
     */
    public function set_abbreviation($abbreviation)
    {
     $this->abbreviation = $abbreviation;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function set_binding()
    {
     $id = $this->get_owner_id();
     $this->stmt->bind_param('is', $id, $this->abbreviation );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_room_abbreviation()
    {
     $where_statement =
     "WHERE network_id=? AND abbreviation=?";
     return $this->list_load( $where_statement );
    }
}?>