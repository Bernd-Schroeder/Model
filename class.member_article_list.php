<?php

error_reporting(E_ALL);

/**
 * require_once('basic/class.generated_member_article_list.php');
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include generated_member_article_list
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('generated/class.generated_member_article_list.php');

/* user defined includes */
// section 10-30-49-59-2d9b44d4:148162bc79e:-8000:0000000000001370-includes begin
// section 10-30-49-59-2d9b44d4:148162bc79e:-8000:0000000000001370-includes end

/* user defined constants */
// section 10-30-49-59-2d9b44d4:148162bc79e:-8000:0000000000001370-constants begin
// section 10-30-49-59-2d9b44d4:148162bc79e:-8000:0000000000001370-constants end

/**
 * require_once('basic/class.generated_member_article_list.php');
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class member_article_list
    extends generated_member_article_list
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
     "WHERE owner_id=? ORDER BY written_stamp DESC";
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
     id FROM member_article
     WHERE owner_id=?";
     return $this->basic_count( $prepare_statement );
    }
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
}?>