<?php

error_reporting(E_ALL);

/**
 * untitledModel - generated\class.room.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 09.11.2016, 08:58:57 with ArgoUML PHP module 
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
// section 10-30--8--14-348ebe49:158441fe3ac:-8000:0000000000004997-includes begin
// section 10-30--8--14-348ebe49:158441fe3ac:-8000:0000000000004997-includes end

/* user defined constants */
// section 10-30--8--14-348ebe49:158441fe3ac:-8000:0000000000004997-constants begin
// section 10-30--8--14-348ebe49:158441fe3ac:-8000:0000000000004997-constants end

/**
 * Short description of class generated_room
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 * @package generated
 */
class generated_room
    extends general_group
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute id
     *
     * @access public
     * @var Integer
     */
    public $id = null;

    /**
     * Short description of attribute network_id
     *
     * @access public
     * @var Integer
     */
    public $network_id = null;

    /**
     * Short description of attribute abbreviation
     *
     * @access public
     * @var String
     */
    public $abbreviation = null;

    /**
     * Short description of attribute description
     *
     * @access public
     * @var String
     */
    public $description = null;

    // --- OPERATIONS ---

} /* end of class generated_room */

?>