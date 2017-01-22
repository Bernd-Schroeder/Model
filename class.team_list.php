<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.team_list.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 14.09.2016, 15:09:18 with ArgoUML PHP module 
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
// section 10-30-49-59-2d9b44d4:148162bc79e:-8000:00000000000013A9-includes begin
// section 10-30-49-59-2d9b44d4:148162bc79e:-8000:00000000000013A9-includes end

/* user defined constants */
// section 10-30-49-59-2d9b44d4:148162bc79e:-8000:00000000000013A9-constants begin
// section 10-30-49-59-2d9b44d4:148162bc79e:-8000:00000000000013A9-constants end

/**
 * Short description of class team_list
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class team_list
    extends generated_team_list
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
    public function load_founder_teams()
    {
     $where_statement =
     "WHERE id=? ORDER BY name ASC";
     return $this->list_load( $where_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_admin_teams()
    {
     $prepare_statement =
     "SELECT" .
     $this->get_prepare_list() .
     "FROM team, team_member
     WHERE ( team_member.member_id=? AND
     team_member.team_id = team.id
     AND team_member.status = 2 ) ORDER BY name ASC";
     return $this->basic_load( $prepare_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_member_teams()
    {
     $prepare_statement =
     "SELECT" .
     $this->get_prepare_list() .
     "FROM team, team_member
     WHERE ( team_member.member_id=? AND
     ( team_member.status=1 OR
     team_member.status=2 OR
     team_member.status=5 OR
     team_member.status=7 ) AND
     team_member.team_id = team.id ) ORDER BY name ASC";
     return $this->basic_load( $prepare_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_member_all_teams()
    {
     $prepare_statement =
     "SELECT" .
     $this->get_prepare_list() .
     "FROM team, team_member
     WHERE ( team_member.member_id=? AND
     ( team_member.status=1 OR
     team_member.status=2 OR
     team_member.status=5 OR
     team_member.status=7 OR
     team_member.status=8 ) AND
     team_member.team_id = team.id ) ORDER BY name ASC";
     return $this->basic_load( $prepare_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_subteam_list()
    {
     $prepare_statement =
     "SELECT" .
     $this->get_prepare_list() .
     "FROM team, team_team
     WHERE ( team_team.team_id=? AND
     team_team.sub_team_id = team.id ) ORDER BY name ASC";
     return $this->basic_load( $prepare_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_upteam_list()
    {
     $prepare_statement =
     "SELECT" .
     $this->get_prepare_list() .
     "FROM team, team_team
     WHERE ( team_team.sub_team_id=? AND
     team_team.team_id = team.id )";
     return $this->basic_load( $prepare_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  member_id
     */
    public function is_member_element_of($member_id)
    {
     $is_element = FALSE;
     for(
     $n = 0;
     (($n < $this->get_item_count()) AND ( $is_element == FALSE ));
     $n++ )
     {
     $team = $this->get_item( $n );
     $is_element = $team->is_member_element_of( $member_id );
     }
     return $is_element;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_team_list()
    {
     $id = $this->get_owner_id();
     $new_team = new team();
     $new_team->set_id( $id );
     $new_team->load();
     $this->add_item( $new_team );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function load_toplevel_list()
    {
     $prepare_statement =
     "SELECT" .
     $this->get_prepare_list() .
     "FROM team_member, team
     WHERE
     (
     (team_member.member_id=?)
     AND
     (team_member.team_id = team.id)
     AND
     (team.type=1)
     )";
     return $this->basic_load( $prepare_statement );
    }
}?>