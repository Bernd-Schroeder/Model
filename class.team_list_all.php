<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.team_list_all.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 14.09.2016, 15:19:51 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include generated_team_list
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('generated/class.generated_team_list.php');

/* user defined includes */
// section 10-30-49-71-39e99cc9:15728c8e2e8:-8000:000000000000176D-includes begin
// section 10-30-49-71-39e99cc9:15728c8e2e8:-8000:000000000000176D-includes end

/* user defined constants */
// section 10-30-49-71-39e99cc9:15728c8e2e8:-8000:000000000000176D-constants begin
// section 10-30-49-71-39e99cc9:15728c8e2e8:-8000:000000000000176D-constants end

/**
 * Short description of class team_list_all
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class team_list_all
    extends generated_team_list
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_all()
    {
     $where_statement = "";
     return $this->list_load( $where_statement );
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load_toplevel_list()
    {
     $where_statement =
     "WHERE type = 1";
     return $this->list_load( $where_statement );
    }
}?>