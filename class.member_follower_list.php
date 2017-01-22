<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.member_follower_list.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 13.03.2015, 18:41:54 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include generated_member_follower_list
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('generated/class.generated_member_follower_list.php');

/* user defined includes */
// section 10-30-49-59-2d9b44d4:148162bc79e:-8000:000000000000138E-includes begin
// section 10-30-49-59-2d9b44d4:148162bc79e:-8000:000000000000138E-includes end

/* user defined constants */
// section 10-30-49-59-2d9b44d4:148162bc79e:-8000:000000000000138E-constants begin
// section 10-30-49-59-2d9b44d4:148162bc79e:-8000:000000000000138E-constants end

/**
 * Short description of class member_follower_list
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class member_follower_list
    extends generated_member_follower_list
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
    public function load_unaccepted_follower()
    {
     $where_statement =
     "WHERE follower_id=? AND status = 3";
     return $this->list_load( $where_statement );
    }
}?>