<?php

error_reporting(E_ALL);

/**
 * untitledModel - generated\class.team_member.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 10.12.2014, 13:52:35 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 * @package generated
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include general_group
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.general_group.php');

/* user defined includes */
// section -64--88--78-25-6f026eef:148095de848:-8000:00000000000014A8-includes begin
// section -64--88--78-25-6f026eef:148095de848:-8000:00000000000014A8-includes end

/* user defined constants */
// section -64--88--78-25-6f026eef:148095de848:-8000:00000000000014A8-constants begin
// section -64--88--78-25-6f026eef:148095de848:-8000:00000000000014A8-constants end

/**
 * Short description of class generated_team_member
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 * @package generated
 */
class generated_team_member
    extends general_group
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute id
     *
     * @access private
     * @var Integer
     */
    private $id = null;

    /**
     * Short description of attribute team_id
     *
     * @access private
     * @var Integer
     */
    private $team_id = null;

    /**
     * Short description of attribute member_id
     *
     * @access private
     * @var Integer
     */
    private $member_id = null;

    /**
     * Short description of attribute requested
     *
     * @access private
     * @var time_stamp
     */
    private $requested = null;

    /**
     * Short description of attribute status
     *
     * @access private
     * @var Integer
     */
    private $status = null;

    // --- OPERATIONS ---

} /* end of class generated_team_member */

?>