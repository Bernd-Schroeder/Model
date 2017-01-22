<?php

error_reporting(E_ALL);

/**
 * untitledModel - generated\class.task.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 18.09.2015, 09:29:57 with ArgoUML PHP module 
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
// section 10-30-8-92--38de692e:1415422de7b:-8000:000000000000151E-includes begin
// section 10-30-8-92--38de692e:1415422de7b:-8000:000000000000151E-includes end

/* user defined constants */
// section 10-30-8-92--38de692e:1415422de7b:-8000:000000000000151E-constants begin
// section 10-30-8-92--38de692e:1415422de7b:-8000:000000000000151E-constants end

/**
 * Short description of class generated_task
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 * @package generated
 */
class generated_task
    extends general_group
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
     * Short description of attribute author_id
     *
     * @access private
     * @var Integer
     */
    private $author_id = null;

    /**
     * Short description of attribute receiver_id
     *
     * @access private
     * @var Integer
     */
    private $receiver_id = null;

    /**
     * Short description of attribute team_id
     *
     * @access private
     * @var Integer
     */
    private $team_id = null;

    /**
     * Short description of attribute est_duration
     *
     * @access private
     * @var Integer
     */
    private $est_duration = null;

    /**
     * Short description of attribute real_duration
     *
     * @access private
     * @var Integer
     */
    private $real_duration = null;

    /**
     * Short description of attribute status
     *
     * @access private
     * @var Integer
     */
    private $status = null;

    /**
     * Short description of attribute task_description
     *
     * @access private
     * @var String
     */
    private $task_description = null;

    /**
     * Short description of attribute receiver_comment
     *
     * @access private
     * @var String
     */
    private $receiver_comment = null;

    /**
     * Short description of attribute author_comment
     *
     * @access private
     * @var String
     */
    private $author_comment = null;

    /**
     * Short description of attribute start_time_table_item_id
     *
     * @access private
     * @var Integer
     */
    private $start_time_table_item_id = null;

    /**
     * Short description of attribute end_time_table_item_id
     *
     * @access private
     * @var Integer
     */
    private $end_time_table_item_id = null;

    /**
     * Short description of attribute end_item_date
     *
     * @access public
     * @var String
     */
    public $end_item_date = null;

    // --- OPERATIONS ---

} /* end of class generated_task */

?>