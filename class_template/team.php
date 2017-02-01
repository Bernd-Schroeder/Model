<?php

error_reporting(E_ALL);

/**
 * untitledModel - generated\class.team.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 01.02.2017, 10:59:30 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 * @package generated
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * // representation af the basic data model of all members, teams and events
 * // Initial date: 01.01.1970;
 *
 * @author Bernd Schr�der
 * @version 1.0
 */
require_once('class.entity_group.php');

/* user defined includes */
// section -64--88--78-25--1f943e6:147f70bc796:-8000:0000000000001983-includes begin
// section -64--88--78-25--1f943e6:147f70bc796:-8000:0000000000001983-includes end

/* user defined constants */
// section -64--88--78-25--1f943e6:147f70bc796:-8000:0000000000001983-constants begin
// section -64--88--78-25--1f943e6:147f70bc796:-8000:0000000000001983-constants end

/**
 * Short description of class generated_team
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 * @package generated
 */
class generated_team
    extends entity_group
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
     * Short description of attribute owner_id
     *
     * @access public
     * @var Integer
     */
    public $owner_id = null;

    /**
     * Short description of attribute address_id
     *
     * @access private
     * @var Integer
     */
    private $address_id = null;

    /**
     * Short description of attribute network_id
     *
     * @access public
     * @var Integer
     */
    public $network_id = null;

    /**
     * Short description of attribute type
     *
     * @access private
     * @var Integer
     */
    private $type = null;

    /**
     * Short description of attribute image_id
     *
     * @access private
     * @var Integer
     */
    private $image_id = null;

    /**
     * Short description of attribute name
     *
     * @access private
     * @var String
     */
    private $name = null;

    /**
     * Short description of attribute year
     *
     * @access private
     * @var Integer
     */
    private $year = null;

    /**
     * Short description of attribute month
     *
     * @access private
     * @var Integer
     */
    private $month = null;

    /**
     * Short description of attribute day
     *
     * @access private
     * @var Integer
     */
    private $day = null;

    /**
     * Short description of attribute private_information_id
     *
     * @access private
     * @var Integer
     */
    private $private_information_id = null;

    // --- OPERATIONS ---

} /* end of class generated_team */

?>