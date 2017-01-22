<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.forbidden_word_list.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 29.10.2014, 16:31:46 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include generated_forbidden_word_list
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('generated/class.generated_forbidden_word_list.php');

/* user defined includes */
// section 10-30-49-59-2d9b44d4:148162bc79e:-8000:000000000000138B-includes begin
// section 10-30-49-59-2d9b44d4:148162bc79e:-8000:000000000000138B-includes end

/* user defined constants */
// section 10-30-49-59-2d9b44d4:148162bc79e:-8000:000000000000138B-constants begin
// section 10-30-49-59-2d9b44d4:148162bc79e:-8000:000000000000138B-constants end

/**
 * Short description of class forbidden_word_list
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class forbidden_word_list
    extends generated_forbidden_word_list
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function load()
    {
     $where_statement = "";
     return $this->list_load( $where_statement );
    }
}?>