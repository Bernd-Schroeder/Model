<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.team_event_list.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 27.01.2015, 15:37:35 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include generated_team_event_list
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('generated/class.generated_team_event_list.php');

/* user defined includes */
// section 10-30-49-59-2d9b44d4:148162bc79e:-8000:000000000000139A-includes begin
// section 10-30-49-59-2d9b44d4:148162bc79e:-8000:000000000000139A-includes end

/* user defined constants */
// section 10-30-49-59-2d9b44d4:148162bc79e:-8000:000000000000139A-constants begin
// section 10-30-49-59-2d9b44d4:148162bc79e:-8000:000000000000139A-constants end

/**
 * Short description of class team_event_list
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class team_event_list
    extends generated_team_event_list
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
    public function get_team_events_count()
    {
     $prepare_statement =
     "SELECT
     id FROM team_event
     WHERE team_id=?";
     return $this->basic_count( $prepare_statement );
    }
}?>