<?php

error_reporting(E_ALL);

/**
 * This Object is the representation of evey contry used in this model.
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
// section 127-0-0-1--6a0663b0:13aad65aa9d:-8000:0000000000000E2A-includes begin
// section 127-0-0-1--6a0663b0:13aad65aa9d:-8000:0000000000000E2A-includes end

/* user defined constants */
// section 127-0-0-1--6a0663b0:13aad65aa9d:-8000:0000000000000E2A-constants begin
// section 127-0-0-1--6a0663b0:13aad65aa9d:-8000:0000000000000E2A-constants end

/**
 * This Object is the representation of evey contry used in this model.
 *
 * @access public
 * @author Bernd Schröder
 * @package generated
 * @version 1.0
 */
class generated_country
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
     * The string representation of the name of the country
     *
     * @access private
     * @var String
     */
    private $name_en = null;

    /**
     * Short description of attribute name_dk
     *
     * @access public
     * @var String
     */
    public $name_dk = null;

    /**
     * Short description of attribute name_ge
     *
     * @access public
     * @var String
     */
    public $name_ge = null;

    // --- OPERATIONS ---

} /* end of class generated_country */

?>