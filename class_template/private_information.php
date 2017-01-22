<?php

error_reporting(E_ALL);

/**
 * represents all telephone number of a member
 *
 * @author Bernd Schröder
 * @package generated
 * @version 1.0
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
// section 10-30-8-118-4a4de3ec:13ab09f0478:-8000:0000000000000E52-includes begin
// section 10-30-8-118-4a4de3ec:13ab09f0478:-8000:0000000000000E52-includes end

/* user defined constants */
// section 10-30-8-118-4a4de3ec:13ab09f0478:-8000:0000000000000E52-constants begin
// section 10-30-8-118-4a4de3ec:13ab09f0478:-8000:0000000000000E52-constants end

/**
 * represents all telephone number of a member
 *
 * @access public
 * @author Bernd Schröder
 * @package generated
 * @version 1.0
 */
class generated_private_information
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
     * represents a mobile number
     *
     * @access private
     * @var String
     */
    private $mobile_phone = null;

    /**
     * represents the home number
     *
     * @access private
     * @var String
     */
    private $home_phone = null;

    /**
     * represents the work either business number
     *
     * @access private
     * @var String
     */
    private $work_phone = null;

    // --- OPERATIONS ---

} /* end of class generated_private_information */

?>