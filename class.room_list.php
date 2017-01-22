<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.room_list.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 09.11.2016, 09:47:12 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include generated_room_list
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('generated/class.generated_room_list.php');

/* user defined includes */
// section 10-30--8--14--61d6b318:158481cb5f2:-8000:000000000000178F-includes begin
// section 10-30--8--14--61d6b318:158481cb5f2:-8000:000000000000178F-includes end

/* user defined constants */
// section 10-30--8--14--61d6b318:158481cb5f2:-8000:000000000000178F-constants begin
// section 10-30--8--14--61d6b318:158481cb5f2:-8000:000000000000178F-constants end

/**
 * Short description of class room_list
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class room_list
    extends generated_room_list
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
     $id = $this->get_owner_id();
     $this->stmt->bind_param('i', $id );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_school_room()
    {
     $where_statement =
     "WHERE network_id=?";
     return $this->list_load( $where_statement );
    }
}?>