<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.member_list_search.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 05.09.2016, 16:42:44 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include generated_member_list
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('generated/class.generated_member_list.php');

/* user defined includes */
// section 10-5-23-76-6873b9db:1483b9ea054:-8000:0000000000001421-includes begin
// section 10-5-23-76-6873b9db:1483b9ea054:-8000:0000000000001421-includes end

/* user defined constants */
// section 10-5-23-76-6873b9db:1483b9ea054:-8000:0000000000001421-constants begin
// section 10-5-23-76-6873b9db:1483b9ea054:-8000:0000000000001421-constants end

/**
 * Short description of class member_list_search
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class member_list_search
    extends generated_member_list
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute tag
     *
     * @access private
     * @var String
     */
    private $tag = null;

    /**
     * Short description of attribute network_id
     *
     * @access private
     * @var Integer
     */
    private $network_id = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  network_id
     */
    public function set_network_id($network_id)
    {
     $this->network_id = $network_id;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  tag
     */
    public function set_tag($tag)
    {
     $this->tag = $tag;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function set_binding()
    {
     $tag = "%" . $this->tag . "%";
     $id = $this->network_id;
     $this->stmt->bind_param('iss', $id, $tag, $tag );
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
     "FROM member, team_member, team
     WHERE
     (
     team.type=1
     AND
     team.network_id=?
     AND
     team_member.team_id = team.id
     AND
     team_member.member_id = member.id
     AND
     (( member.name LIKE ? )
     OR
     ( member.forename LIKE ? ))
     )";
     return $this->basic_load( $prepare_statement );
    }
}?>