<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.event.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 27.06.2016, 13:14:19 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include event_navigation
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.event_navigation.php');

/* user defined includes */
// section 10-5-25-73-4eb7a804:14a54468563:-8000:00000000000014B3-includes begin
// section 10-5-25-73-4eb7a804:14a54468563:-8000:00000000000014B3-includes end

/* user defined constants */
// section 10-5-25-73-4eb7a804:14a54468563:-8000:00000000000014B3-constants begin
// section 10-5-25-73-4eb7a804:14a54468563:-8000:00000000000014B3-constants end

/**
 * Short description of class event
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class event
    extends event_navigation
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_entity_name()
    {
     return "D";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_owner_group()
    {
     return "e";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_basic_post_frame()
    {
     return "D_post_frame";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_link()
    {
     return
     "<a href=\"" . $_SESSION['D_control_base'] .
     "D0_pre_frame.php?id=" .
     $this->get_id() . "\">" .
     $this->get_name() .
     "</a>";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_abs_link()
    {
     return
     "<a href=\"" .
     "http://www." . $_SESSION['domain'] . ".com" .
     $_SESSION['D_control_base'] .
     "D0_pre_frame.php?id=" .
     $this->get_id() . "\">" .
     $this->get_name() .
     "</a>";
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function remove_event()
    {
     require_once('class.team_member.php');
     require_once('class.team_event.php');
     
     // Alle Mitglieder entfernen
     $memberlist = $this->get_all_member_list();
     for( $n = 0; $n < $memberlist->get_item_count(); $n++ )
     { $this->remove_member( $memberlist->get_item( $n )->get_id() ); }
     
     // Alle Artikel löschen
     $articlelist = $this->get_article_list();
     for( $n = 0; $n < $articlelist->get_item_count(); $n++ )
     { $articlelist->get_item( $n )->remove_article(); }
     
     // Alle Dokumente löschen
     $document_list = $this->get_document_list();
     for( $n = 0; $n < $document_list->get_item_count(); $n++ )
     {
     $document = $document_list->get_item( $n );
     $document->remove_file();
     $document->delete();
     }
     
     // Alle Bilder löschen
     $image_list = $this->get_image_list();
     for( $n = 0; $n < $image_list->get_item_count(); $n++ )
     {
     $image = $image_list->get_item( $n );
     $image->remove_all_files();
     $image->delete();
     }
     
     // Alle Videos löschen
     $video_list = $this->get_video_list();
     for( $n = 0; $n < $video_list->get_item_count(); $n++ )
     {
     $video = $video_list->get_item( $n );
     $video->remove_file();
     $video->delete();
     }
     
     // Verbindung zu dem Team löschen
     $team_id = $this->get_owner_id();
     $team_event = new team_event();
     $id = $team_event->find_event( $team_id, $this->get_id() );
     if( $id > (int)0 )
     {
     $team_event->set_id( $id );
     $team_event->delete();
     }
     // selben Event löschen
     $this->delete();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  member_id
     */
    public function remove_member($member_id)
    {
     require_once('class.event_member.php');
     
     $event_member = new event_member();
     $event_member_id = $event_member->find_member_statusless(
     $this->get_id(), $member_id );
     if ( $event_member_id > 0 )
     {
     $event_member->set_id( $event_member_id );
     $event_member->delete();
     }
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_upteam()
    {
     require_once('class.team.php');
     
     $team = new team();
     $team->set_id( $this->get_owner_id() );
     $team->load();
     return $team;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_upteam_name()
    {
     return $this->get_upteam()->get_name();
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_sort_value()
    {
     date_default_timezone_set('Europe/Berlin');
     $date = new DateTime();
     $date->setdate(
     $this->get_year(),
     $this->get_month(),
     $this->get_day() );
     return $date;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  member
     */
    public function get_member_relation($member)
    {
     require_once('class.event_member.php');
     
     $event_member = new event_member();
     $relation = $event_member->
     get_relation( $this->get_id(), $member->get_id() );
     return $relation;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  article_id
     */
    public function get_article($article_id)
    {
     require_once('class.event_article.php');
     
     $article = new event_article();
     $article->set_id( $article_id );
     $article->load();
     return $article;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_start_datetime_eu()
    {
     date_default_timezone_set('Europe/Berlin');
     $date = new datetime( $this->get_start_datetime() );
     return
     $date->format('d') . "." .
     $date->format('m') . "." .
     $date->format('Y') . " " .
     $date->format('H') . ":" .
     $date->format('i');
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_end_datetime_eu()
    {
     date_default_timezone_set('Europe/Berlin');
     $date = new datetime( $this->get_end_datetime() );
     return
     $date->format('d') . "." .
     $date->format('m') . "." .
     $date->format('Y') . " " .
     $date->format('H') . ":" .
     $date->format('i');
    }
}?>