<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.team_my_list.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 27.02.2015, 15:51:02 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include generated_team_list
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('generated/class.generated_team_list.php');

/* user defined includes */
// section 10-30-49-60-3166f093:14bcb163588:-8000:00000000000023C8-includes begin
// section 10-30-49-60-3166f093:14bcb163588:-8000:00000000000023C8-includes end

/* user defined constants */
// section 10-30-49-60-3166f093:14bcb163588:-8000:00000000000023C8-constants begin
// section 10-30-49-60-3166f093:14bcb163588:-8000:00000000000023C8-constants end

/**
 * Short description of class team_my_list
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class team_my_list
    extends generated_team_list
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute member_id
     *
     * @access public
     * @var Integer
     */
    public $member_id = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  member_id
     */
    public function set_member_id($member_id)
    {
     $this->member_id = $member_id;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function set_binding()
    {
     $id = $this->get_owner_id();
     $this->stmt->bind_param('ii', $id, $this->member_id );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load()
    {
     $prepare_statement =
     "SELECT" .
     $this->get_prepare_list() .
     "FROM team, team_team, team_member
     WHERE ( team_team.team_id=? AND
     team_team.sub_team_id = team.id AND
     team_member.member_id=? AND
     team_member.team_id = team.id )";
     return $this->basic_load( $prepare_statement );
    }
}?>