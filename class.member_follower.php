<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.member_follower.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 10.03.2015, 10:09:06 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include generated_member_follower
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('generated/class.generated_member_follower.php');

/* user defined includes */
// section -64--88--78-25-6f026eef:148095de848:-8000:00000000000014A5-includes begin
// section -64--88--78-25-6f026eef:148095de848:-8000:00000000000014A5-includes end

/* user defined constants */
// section -64--88--78-25-6f026eef:148095de848:-8000:00000000000014A5-constants begin
// section -64--88--78-25-6f026eef:148095de848:-8000:00000000000014A5-constants end

/**
 * Short description of class member_follower
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class member_follower
    extends generated_member_follower
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  follower_id
     * @param  member_id
     * @param  status
     */
    public function find_member($follower_id, $member_id, $status)
    {
     require "generated/data_connect.php";
     $found_id = 0;
     if ( $stmt = $mysqli->prepare("SELECT
     id FROM member_follower
     WHERE follower_id=? AND member_id=? AND status=? "))
     {
     $stmt->bind_param('iii', $follower_id, $member_id, $status );
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
     * @param  member_id
     * @param  follower_id
     */
    public function get_relation($member_id, $follower_id)
    {
     require "generated/data_connect.php";
     $follower_status = 0;
     if ( $stmt = $mysqli->prepare("SELECT
     status FROM member_follower
     WHERE follower_id=? AND member_id=? "))
     {
     $stmt->bind_param('ii', $follower_id, $member_id );
     $stmt->execute();
     $stmt->bind_result($status);
     if ( $stmt->fetch() == TRUE )
     {
     $follower_status = $status;
     $stmt->close();
     }
     $mysqli->close();
     }
     return $follower_status;
    }
}?>