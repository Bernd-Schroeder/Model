<?php

error_reporting(E_ALL);

/**
 * untitledModel - generated\class.member_message.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 08.12.2014, 19:45:17 with ArgoUML PHP module 
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
// section -64--88--78-25-1362e296:147f7ea7a9e:-8000:0000000000001676-includes begin
// section -64--88--78-25-1362e296:147f7ea7a9e:-8000:0000000000001676-includes end

/* user defined constants */
// section -64--88--78-25-1362e296:147f7ea7a9e:-8000:0000000000001676-constants begin
// section -64--88--78-25-1362e296:147f7ea7a9e:-8000:0000000000001676-constants end

/**
 * Short description of class generated_member_message
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 * @package generated
 */
class generated_member_message
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
     * Short description of attribute author_id
     *
     * @access private
     * @var Integer
     */
    private $author_id = null;

    /**
     * Short description of attribute written_stamp
     *
     * @access private
     * @var time_stamp
     */
    private $written_stamp = null;

    /**
     * Short description of attribute reader_id
     *
     * @access private
     * @var Integer
     */
    private $reader_id = null;

    /**
     * Short description of attribute read_stamp
     *
     * @access private
     * @var String
     */
    private $read_stamp = null;

    /**
     * Short description of attribute text
     *
     * @access private
     * @var String
     */
    private $text = null;

    // --- OPERATIONS ---

} /* end of class generated_member_message */

?>