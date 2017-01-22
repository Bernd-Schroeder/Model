<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.csv_list.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 19.10.2016, 16:54:43 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include generated_csv_list
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('generated/class.generated_csv_list.php');

/* user defined includes */
// section 10-5-28--17--63d8f4e1:156133428b0:-8000:000000000000262C-includes begin
// section 10-5-28--17--63d8f4e1:156133428b0:-8000:000000000000262C-includes end

/* user defined constants */
// section 10-5-28--17--63d8f4e1:156133428b0:-8000:000000000000262C-constants begin
// section 10-5-28--17--63d8f4e1:156133428b0:-8000:000000000000262C-constants end

/**
 * Short description of class csv_list
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class csv_list
    extends generated_csv_list
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute error_line
     *
     * @access private
     * @var Integer
     */
    private $error_line = null;

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_error_line()
    {
     return $this->error_line;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  csv_content
     */
    public function load_csv_list_from_text($csv_content)
    {
     require_once('class.csv_list.php');
     
     $table_list = new csv_list();
     $table_list->set_array( explode( PHP_EOL, $csv_content ) );
     $num = $table_list->get_item_count();
     for ( $n=0; $n<$num; $n++ )
     {
     $csv_line = $table_list->get_item($n);
     $line_list = new csv_list();
     $line_list->set_array( explode( ";", $csv_line ) );
     $this->add_item( $line_list );
     }
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_csv_text()
    {
     $this->csv_content = "";
     
     for ($c=0; $c < $this->get_item_count(); $c++)
     {
     $array = $this->get_item($c)->get_array();
     $csv_line = implode(";", $array);
     if( $c < ( $this->get_item_count()-(int)1 ))
     {
     $this->csv_content .= $csv_line . PHP_EOL; }
     else
     { $this->csv_content .= $csv_line; }
     }
     return $this->csv_content;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  width
     */
    public function analyze_csv_list($width)
    {
     $success = TRUE;
     $list_count = $this->get_item_count();
     
     for ($c=0; ( $c < $list_count AND $success ); $c++)
     {
     $this->error_line = $c+1;
     $csv_line = $this->get_item( $c );
     $success = $this->analyze_csv_line( $csv_line, $width );
     }
     
     return $success;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  csv_line
     * @param  width
     */
    public function analyze_csv_line($csv_line, $width)
    {
     $success = TRUE;
     $line_count = $csv_line->get_item_count();
     
     if( $line_count == $width )
     {
     for ($x=0; ( $x < $line_count AND $success ); $x++)
     {
     $csv_value = $csv_line->get_item( $x );
     if (( strlen( $csv_value ) == (int)0 ) OR ( $csv_value == PHP_EOL ))
     {
     $this->get_db_warning()->csv_line_error();
     $this->get_db_warning()->serialize();
     $success = FALSE;
     }
     }
     }
     else
     {
     $this->get_db_warning()->csv_width_error();
     $this->get_db_warning()->serialize();
     $success = FALSE;
     }
     return $success;
    }
}?>