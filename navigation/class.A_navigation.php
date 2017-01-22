<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.A_navigation.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 15.07.2015, 14:20:52 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include basic_navigation
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.basic_navigation.php');

/* user defined includes */
// section 10-5-26--19--64b5f0a4:14aa56cbb6a:-8000:00000000000044FB-includes begin
// section 10-5-26--19--64b5f0a4:14aa56cbb6a:-8000:00000000000044FB-includes end

/* user defined constants */
// section 10-5-26--19--64b5f0a4:14aa56cbb6a:-8000:00000000000044FB-constants begin
// section 10-5-26--19--64b5f0a4:14aa56cbb6a:-8000:00000000000044FB-constants end

/**
 * Short description of class A_navigation
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class A_navigation
    extends basic_navigation
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function generate_top_navigation()
    {
     $navigation_list = new navigation_list();
     return $navigation_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function generate_left_member_navigation()
    {
     $navigation_list = parent::generate_left_navigation();
     return $navigation_list;
    }
}?>