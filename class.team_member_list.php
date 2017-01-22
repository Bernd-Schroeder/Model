<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.team_member_list.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 03.02.2015, 13:24:15 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include generated_team_member_list
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('generated/class.generated_team_member_list.php');

/* user defined includes */
// section 10-30-49-59-2d9b44d4:148162bc79e:-8000:0000000000001391-includes begin
// section 10-30-49-59-2d9b44d4:148162bc79e:-8000:0000000000001391-includes end

/* user defined constants */
// section 10-30-49-59-2d9b44d4:148162bc79e:-8000:0000000000001391-constants begin
// section 10-30-49-59-2d9b44d4:148162bc79e:-8000:0000000000001391-constants end

/**
 * Short description of class team_member_list
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class team_member_list
    extends generated_team_member_list
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
    public function load_unaccepted_teams()
    {
     $where_statement = 
     "WHERE member_id=? AND (status = 4 OR status = 7)";
     return $this->list_load( $where_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_team_members_count()
    {
     $where_statement =
     "SELECT id FROM team_member
     WHERE (team_id = ? AND
     ( status = 1 OR status = 2 OR status = 5 ))";
     return $this->basic_count( $where_statement );
    }
}?>