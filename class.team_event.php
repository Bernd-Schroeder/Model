<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.team_event.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 09.02.2015, 16:02:49 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include generated_team_event
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('generated/class.generated_team_event.php');

/* user defined includes */
// section -64--88--78-25-6f026eef:148095de848:-8000:00000000000014B2-includes begin
// section -64--88--78-25-6f026eef:148095de848:-8000:00000000000014B2-includes end

/* user defined constants */
// section -64--88--78-25-6f026eef:148095de848:-8000:00000000000014B2-constants begin
// section -64--88--78-25-6f026eef:148095de848:-8000:00000000000014B2-constants end

/**
 * Short description of class team_event
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class team_event
    extends generated_team_event
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  team_id
     * @param  event_id
     */
    public function find_event($team_id, $event_id)
    {
     require "generated/data_connect.php";
     $found_id = 0;
     if ( $stmt = $mysqli->prepare("SELECT
     id FROM team_event
     WHERE team_id=? AND event_id=? "))
     {
     $stmt->bind_param('ii', $team_id, $event_id );
     $stmt->execute();
     $stmt->bind_result($id);
     if ( $stmt->fetch() == TRUE )
     {
     $found_id = $id;
     $stmt->close();
     }
     $mysqli->close();
     }
     return $found_id;
    }
}?>