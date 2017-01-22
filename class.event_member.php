<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.event_member.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 10.03.2016, 22:57:51 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include generated_event_member
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('generated/class.generated_event_member.php');

/* user defined includes */
// section -64--88--78-25-6f026eef:148095de848:-8000:00000000000014AC-includes begin
// section -64--88--78-25-6f026eef:148095de848:-8000:00000000000014AC-includes end

/* user defined constants */
// section -64--88--78-25-6f026eef:148095de848:-8000:00000000000014AC-constants begin
// section -64--88--78-25-6f026eef:148095de848:-8000:00000000000014AC-constants end

/**
 * Short description of class event_member
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class event_member
    extends generated_event_member
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  event_id
     * @param  member_id
     * @param  status
     */
    public function find_member($event_id, $member_id, $status)
    {
     require "generated/data_connect.php";
     $found_id = 0;
     if ( $stmt = $mysqli->prepare("SELECT
     id FROM event_member
     WHERE event_id=? AND member_id=? AND status=? "))
     {
     $stmt->bind_param('iii', $event_id, $member_id, $status );
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
     * @param  event_id
     * @param  member_id
     */
    public function find_member_statusless($event_id, $member_id)
    {
     require "generated/data_connect.php";
     $found_id = 0;
     if ( $stmt = $mysqli->prepare("SELECT
     id FROM event_member
     WHERE event_id=? AND member_id=? "))
     {
     $stmt->bind_param('ii', $event_id, $member_id );
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
     * @param  event_id
     * @param  member_id
     */
    public function get_relation($event_id, $member_id)
    {
     require "generated/data_connect.php";
     $event_status = 9;
     if ( $stmt = $mysqli->prepare("SELECT
     status FROM event_member
     WHERE event_id=? AND member_id=? "))
     {
     $stmt->bind_param('ii', $event_id, $member_id );
     $stmt->execute();
     $stmt->bind_result($status);
     if ( $stmt->fetch() == TRUE )
     {
     $event_status = $status;
     $stmt->close();
     }
     $mysqli->close();
     }
     return $event_status;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_relation_item()
    {
     if( $this->get_status() == (int)5 )
     { $tag = "<img src=\"". $_SESSION['icons'] .  "ok.png\" " . "/>"; }
     elseif ( $this->get_status() == (int)4 )
     { $tag = "<img src=\"". $_SESSION['icons'] .  "partly.png\" " . "/>"; }
     else
     { $tag = "<img src=\"". $_SESSION['icons'] .  "no.png\" " . "/>"; }
     return $tag;
    }
}?>