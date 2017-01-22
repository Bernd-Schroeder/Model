<?php

error_reporting(E_ALL);

/**
 * untitledModel - generated\class.news.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 28.06.2015, 20:43:04 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 * @package generated
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
// section 10-5-25--126--8f7a905:14c7437e539:-8000:00000000000027CB-includes begin
// section 10-5-25--126--8f7a905:14c7437e539:-8000:00000000000027CB-includes end

/* user defined constants */
// section 10-5-25--126--8f7a905:14c7437e539:-8000:00000000000027CB-constants begin
// section 10-5-25--126--8f7a905:14c7437e539:-8000:00000000000027CB-constants end

/**
 * Short description of class generated_news
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 * @package generated
 */
class generated_news
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
     * Short description of attribute upload_stamp
     *
     * @access public
     * @var time_stamp
     */
    public $upload_stamp = null;

    /**
     * Short description of attribute receiver_id
     *
     * @access public
     * @var Integer
     */
    public $receiver_id = null;

    /**
     * Short description of attribute entity_group
     *
     * @access public
     * @var String
     */
    public $entity_group = null;

    /**
     * Short description of attribute entity_id
     *
     * @access public
     * @var Integer
     */
    public $entity_id = null;

    /**
     * Short description of attribute function
     *
     * @access public
     * @var Integer
     */
    public $function = null;

    /**
     * Short description of attribute article_id
     *
     * @access public
     * @var Integer
     */
    public $article_id = null;

    /**
     * Short description of attribute is_read
     *
     * @access public
     * @var Integer
     */
    public $is_read = null;

    /**
     * Short description of attribute uploader_id
     *
     * @access public
     * @var Integer
     */
    public $uploader_id = null;

    // --- OPERATIONS ---

} /* end of class generated_news */

?>