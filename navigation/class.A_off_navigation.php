<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.A_off_navigation.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 15.07.2015, 15:38:54 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include A_navigation
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.A_navigation.php');

/* user defined includes */
// section 127-0-0-1--71f03ac0:14e87bc885d:-8000:0000000000004818-includes begin
// section 127-0-0-1--71f03ac0:14e87bc885d:-8000:0000000000004818-includes end

/* user defined constants */
// section 127-0-0-1--71f03ac0:14e87bc885d:-8000:0000000000004818-constants begin
// section 127-0-0-1--71f03ac0:14e87bc885d:-8000:0000000000004818-constants end

/**
 * Short description of class A_off_navigation
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class A_off_navigation
    extends A_navigation
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function generate_left_member_navigation()
    {
     $navigation_list = new navigation_list();
     return $navigation_list;
    }
}?>