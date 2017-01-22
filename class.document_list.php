<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.document_list.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 25.06.2016, 18:07:00 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include generated_document_list
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('generated/class.generated_document_list.php');

/* user defined includes */
// section 10-30-49-59-2d9b44d4:148162bc79e:-8000:000000000000139D-includes begin
// section 10-30-49-59-2d9b44d4:148162bc79e:-8000:000000000000139D-includes end

/* user defined constants */
// section 10-30-49-59-2d9b44d4:148162bc79e:-8000:000000000000139D-constants begin
// section 10-30-49-59-2d9b44d4:148162bc79e:-8000:000000000000139D-constants end

/**
 * Short description of class document_list
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class document_list
    extends generated_document_list
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute owner_group
     *
     * @access public
     * @var String
     */
    public $owner_group = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  owner_group
     */
    public function set_owner_group($owner_group)
    {
     $this->owner_group = $owner_group;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load()
    {
     $where_statement =
     "WHERE owner_id=? AND owner_group=?
     ORDER BY upload_stamp DESC";
     return $this->list_load( $where_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function get_count()
    {
     $prepare_statement =
     "SELECT
     id FROM document
     WHERE owner_id=? AND owner_group=?";
     return $this->basic_count( $prepare_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function set_binding()
    {
     $owner_id = $this->get_owner_id();
     $owner_group = $this->owner_group;
     $this->stmt->bind_param('is', $owner_id, $owner_group );
    }
}?>