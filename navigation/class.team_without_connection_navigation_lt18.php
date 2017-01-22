<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.team_without_connection_navigation_lt18.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 17.03.2015, 13:42:16 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include basic_team_navigation
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.basic_team_navigation.php');

/* user defined includes */
// section 10-30-49-121-1b7ef9f1:14c27af20da:-8000:00000000000019C9-includes begin
// section 10-30-49-121-1b7ef9f1:14c27af20da:-8000:00000000000019C9-includes end

/* user defined constants */
// section 10-30-49-121-1b7ef9f1:14c27af20da:-8000:00000000000019C9-constants begin
// section 10-30-49-121-1b7ef9f1:14c27af20da:-8000:00000000000019C9-constants end

/**
 * Short description of class team_without_connection_navigation_lt18
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class team_without_connection_navigation_lt18
    extends basic_team_navigation
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
    public function generate_left_navigation()
    {
     $navigation_list = parent::generate_left_navigation();
     return $navigation_list;
    }
}?>