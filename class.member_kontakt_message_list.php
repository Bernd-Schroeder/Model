<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.member_kontakt_message_list.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 15.06.2015, 15:18:57 with ArgoUML PHP module 
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
// section 10-30-10--80-3ce75e39:14dd2fca3e7:-8000:00000000000016A8-includes begin
// section 10-30-10--80-3ce75e39:14dd2fca3e7:-8000:00000000000016A8-includes end

/* user defined constants */
// section 10-30-10--80-3ce75e39:14dd2fca3e7:-8000:00000000000016A8-constants begin
// section 10-30-10--80-3ce75e39:14dd2fca3e7:-8000:00000000000016A8-constants end

/**
 * Short description of class member_kontakt_message_list
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class member_kontakt_message_list
    extends generated_member_list
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
     $this->stmt->bind_param('ii', $id, $id );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load()
    {
     $prepare_statement =
     "SELECT distinct " .
     $this->get_prepare_list() .
     "FROM member, member_message
     WHERE
     (
     member_message.reader_id=? AND member_message.author_id = member.id
     OR
     member_message.author_id=? AND member_message.reader_id = member.id
     )
     ORDER BY last_activity DESC
     ";
     return $this->basic_load( $prepare_statement );
    }
}?>