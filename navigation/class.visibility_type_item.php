<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.visibility_type_item.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 29.08.2016, 13:23:33 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include basic_item
 *
 * @author Bernd Schröder
 * @version 1.0
 */
require_once('class.basic_item.php');

/**
 * include basic_navigation
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.basic_navigation.php');

/* user defined includes */
// section 10-5-29-6--5491766c:156bc0e799b:-8000:0000000000001A1A-includes begin
// section 10-5-29-6--5491766c:156bc0e799b:-8000:0000000000001A1A-includes end

/* user defined constants */
// section 10-5-29-6--5491766c:156bc0e799b:-8000:0000000000001A1A-constants begin
// section 10-5-29-6--5491766c:156bc0e799b:-8000:0000000000001A1A-constants end

/**
 * Short description of class visibility_type_item
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class visibility_type_item
    extends basic_item
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  item
     */
    public function get_validate_visibility($item)
    {
     $visibility = FALSE;
     $type = $item->get_type();
     
     if ( $this->get_visibility_type() == $type )
     { $visibility = TRUE; }

     return $visibility;
    }
}?>