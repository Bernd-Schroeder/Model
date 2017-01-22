<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.team_team.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 09.02.2015, 16:04:12 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include generated_team_team
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('generated/class.generated_team_team.php');

/* user defined includes */
// section -64--88--78-25-6f026eef:148095de848:-8000:00000000000014AF-includes begin
// section -64--88--78-25-6f026eef:148095de848:-8000:00000000000014AF-includes end

/* user defined constants */
// section -64--88--78-25-6f026eef:148095de848:-8000:00000000000014AF-constants begin
// section -64--88--78-25-6f026eef:148095de848:-8000:00000000000014AF-constants end

/**
 * Short description of class team_team
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class team_team
    extends generated_team_team
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  team_id
     * @param  sub_team_id
     * @param  status
     */
    public function find_team($team_id, $sub_team_id, $status)
    {
     require "generated/data_connect.php";
     $found_id = 0;
     if ( $stmt = $mysqli->prepare("SELECT
     id FROM team_team
     WHERE team_id=? AND sub_team_id=? AND status=? "))
     {
     $stmt->bind_param('iii', $team_id, $sub_team_id, $status );
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