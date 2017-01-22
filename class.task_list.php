<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.task_list.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 04.10.2015, 20:03:14 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include generated_task_list
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('generated/class.generated_task_list.php');

/* user defined includes */
// section 10-30-49-59-2d9b44d4:148162bc79e:-8000:0000000000001388-includes begin
// section 10-30-49-59-2d9b44d4:148162bc79e:-8000:0000000000001388-includes end

/* user defined constants */
// section 10-30-49-59-2d9b44d4:148162bc79e:-8000:0000000000001388-constants begin
// section 10-30-49-59-2d9b44d4:148162bc79e:-8000:0000000000001388-constants end

/**
 * Short description of class task_list
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class task_list
    extends generated_task_list
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
    public function load_team_task()
    {
     $where_statement = 
     "WHERE team_id=?";
     return $this->list_load( $where_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_receiver_task()
    {
     $where_statement = 
     "WHERE receiver_id=?";
     return $this->list_load( $where_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_author_task()
    {
     $where_statement = 
     "WHERE author_id=?";
     return $this->list_load( $where_statement );
    }
}?>