<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.team_member.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 09.02.2015, 16:06:30 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include generated_team_member
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('generated/class.generated_team_member.php');

/* user defined includes */
// section -64--88--78-25-6f026eef:148095de848:-8000:00000000000014A9-includes begin
// section -64--88--78-25-6f026eef:148095de848:-8000:00000000000014A9-includes end

/* user defined constants */
// section -64--88--78-25-6f026eef:148095de848:-8000:00000000000014A9-constants begin
// section -64--88--78-25-6f026eef:148095de848:-8000:00000000000014A9-constants end

/**
 * Short description of class team_member
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class team_member
    extends generated_team_member
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  team_id
     * @param  member_id
     * @param  status
     */
    public function find_member($team_id, $member_id, $status)
    {
     require "generated/data_connect.php";
     $found_id = 0;
     if ( $stmt = $mysqli->prepare("SELECT
     id FROM team_member
     WHERE team_id=? AND member_id=? AND status=? "))
     {
     $stmt->bind_param('iii', $team_id, $member_id, $status );
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
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  team_id
     * @param  member_id
     */
    public function find_member_statusless($team_id, $member_id)
    {
     require "generated/data_connect.php";
     $found_id = 0;
     if ( $stmt = $mysqli->prepare("SELECT
     id FROM team_member
     WHERE team_id=? AND member_id=? "))
     {
     $stmt->bind_param('ii', $team_id, $member_id );
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
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  team_id
     * @param  member_id
     */
    public function get_relation($team_id, $member_id)
    {
     require "generated/data_connect.php";
     $team_status = 9;
     if ( $stmt = $mysqli->prepare("SELECT
     status FROM team_member
     WHERE team_id=? AND member_id=? "))
     {
     $stmt->bind_param('ii', $team_id, $member_id );
     $stmt->execute();
     $stmt->bind_result($status);
     if ( $stmt->fetch() == TRUE )
     {
     $team_status = $status;
     $stmt->close();
     }
     $mysqli->close();
     }
     return $team_status;
    }
}?>