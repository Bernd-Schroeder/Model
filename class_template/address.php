<?php

error_reporting(E_ALL);

/**
 * This Object is the representation of a basic structure of a complete adress
 *
 * @author Bernd Schröder
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
// section -64--88--78-21--21246cb3:13a941081d7:-8000:0000000000000BEA-includes begin
// section -64--88--78-21--21246cb3:13a941081d7:-8000:0000000000000BEA-includes end

/* user defined constants */
// section -64--88--78-21--21246cb3:13a941081d7:-8000:0000000000000BEA-constants begin
// section -64--88--78-21--21246cb3:13a941081d7:-8000:0000000000000BEA-constants end

/**
 * This Object is the representation of a basic structure of a complete adress
 *
 * @access public
 * @author Bernd Schröder
 * @version 1.0
 */
class generated_address
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
     * represents the primary key of the corresponding country
     *
     * @access private
     * @var Integer
     */
    private $country_id = null;

    /**
     * Short description of attribute zip_code
     *
     * @access public
     * @var String
     */
    public $zip_code = null;

    /**
     * Short description of attribute city_name
     *
     * @access public
     * @var String
     */
    public $city_name = null;

    /**
     * represents the streetname
     *
     * @access private
     * @var String
     */
    private $street_name = null;

    /**
     * represents the house number
     *
     * @access private
     * @var String
     */
    private $house_number = null;

    // --- OPERATIONS ---

} /* end of class generated_address */

?>