<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.basic_db_format_class.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 03.12.2016, 12:30:44 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/* user defined includes */
// section 10-5-29--89-5bd869f8:158c460023c:-8000:0000000000001789-includes begin
// section 10-5-29--89-5bd869f8:158c460023c:-8000:0000000000001789-includes end

/* user defined constants */
// section 10-5-29--89-5bd869f8:158c460023c:-8000:0000000000001789-constants begin
// section 10-5-29--89-5bd869f8:158c460023c:-8000:0000000000001789-constants end

/**
 * Short description of class basic_db_format_class
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class basic_db_format_class
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  time
     */
    public function get_eu_time($time)
    {
     date_default_timezone_set('Europe/Berlin');
     $date = new datetime( $time );
     return
     $date->format('d') . "." .
     $date->format('m') . "." .
     $date->format('Y') . " " .
     $date->format('H') . ":" .
     $date->format('i');
    }
}?>