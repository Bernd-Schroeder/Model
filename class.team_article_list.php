<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.team_article_list.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 26.06.2016, 21:59:34 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include generated_team_article_list
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('generated/class.generated_team_article_list.php');

/* user defined includes */
// section 10-30-49-59-2d9b44d4:148162bc79e:-8000:0000000000001373-includes begin
// section 10-30-49-59-2d9b44d4:148162bc79e:-8000:0000000000001373-includes end

/* user defined constants */
// section 10-30-49-59-2d9b44d4:148162bc79e:-8000:0000000000001373-constants begin
// section 10-30-49-59-2d9b44d4:148162bc79e:-8000:0000000000001373-constants end

/**
 * Short description of class team_article_list
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class team_article_list
    extends generated_team_article_list
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load()
    {
     $where_statement =
     "WHERE owner_id=? ORDER BY modified_stamp DESC";
     return $this->list_load( $where_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_all()     
    {
     $where_statement = "";
     return $this->list_load( $where_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_count()
    {
     $prepare_statement =
     "SELECT
     id FROM team_article
     WHERE owner_id=?";
     return $this->basic_count( $prepare_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
//    public function set_binding_x()
    public function set_binding()
    {
     $id = $this->get_owner_id();
     $this->stmt->bind_param('i', $id );
    }
}?>