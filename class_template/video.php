<?php

error_reporting(E_ALL);

/**
 * untitledModel - generated\class.video.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 11.12.2014, 19:02:17 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author Bernd Schröder
 * @package generated
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include file_group
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.file_group.php');

/* user defined includes */
// section 10-30-8-117-50e04501:13c8629b25b:-8000:00000000000010DE-includes begin
// section 10-30-8-117-50e04501:13c8629b25b:-8000:00000000000010DE-includes end

/* user defined constants */
// section 10-30-8-117-50e04501:13c8629b25b:-8000:00000000000010DE-constants begin
// section 10-30-8-117-50e04501:13c8629b25b:-8000:00000000000010DE-constants end

/**
 * Short description of class generated_video
 *
 * @access public
 * @author Bernd Schröder
 * @package generated
 */
class generated_video
    extends file_group
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
     * Short description of attribute owner_group
     *
     * @access private
     * @var String
     */
    private $owner_group = null;

    /**
     * The owner describe to whom this files belongs to.
     *
     * @access private
     * @var Integer
     */
    private $owner_id = null;

    /**
     * The name is the name of the file saved on the hard disk
     *
     * @access private
     * @var String
     */
    private $name = null;

    /**
     * The type identifies the type of file; image: jpg, gif, png, document:
     * etc
     *
     * @access private
     * @var String
     */
    private $type = null;

    /**
     * The header are 2 - 3 words identifying this file
     *
     * @access private
     * @var String
     */
    private $header = null;

    /**
     * The text is a short description of this document
     *
     * @access private
     * @var String
     */
    private $text = null;

    /**
     * The upload time stamp defines the timestamp when this file is uploaded.
     *
     * @access private
     * @var time_stamp
     */
    private $upload_stamp = null;

    /**
     * This is the size of this file.
     *
     * @access private
     * @var Integer
     */
    private $size = null;

    /**
     * who_has_uploaded defines the member who has uploaded this document.
     *
     * @access private
     * @var Integer
     */
    private $uploader_id = null;

    // --- OPERATIONS ---

} /* end of class generated_video */

?>