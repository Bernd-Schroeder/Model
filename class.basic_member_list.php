<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.basic_member_list.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 14.09.2016, 15:31:23 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include generated_member
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('generated/class.generated_member.php');

/* user defined includes */
// section 10-5-25-73-4eb7a804:14a54468563:-8000:00000000000014AF-includes begin
// section 10-5-25-73-4eb7a804:14a54468563:-8000:00000000000014AF-includes end

/* user defined constants */
// section 10-5-25-73-4eb7a804:14a54468563:-8000:00000000000014AF-constants begin
// section 10-5-25-73-4eb7a804:14a54468563:-8000:00000000000014AF-constants end

/**
 * Short description of class basic_member_list
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class basic_member_list
    extends generated_member
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_follower_member_list()
    {
     require_once('class.member_list.php');
     
     $member_list = new member_list();
     $member_list->set_owner_id( $this->get_id() );
     $member_list->load_follower_member_list();
     return $member_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_event_list_count()
    {
     return (int)999;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_active_event_count()
    {
     return (int)100;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_archived_event_count()
    {
     return (int)200;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_monitored_member_list()
    {
     require_once('class.member_list.php');
     
     $member_list = new member_list();
     $member_list->set_owner_id( $this->get_id() );
     $member_list->load_monitored_member_list();
     return $member_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_requested_follower_member_list()
    {
     require_once('class.member_list.php');
     
     $member_list = new member_list();
     $member_list->set_owner_id( $this->get_id() );
     $member_list->load_requested_follower_member_list();
     return $member_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_requested_monitored_member_list()
    {
     require_once('class.member_list.php');
     
     $member_list = new member_list();
     $member_list->set_owner_id( $this->get_id() );
     $member_list->load_requested_monitored_member_list();
     return $member_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_member_message_list()
    {
     require_once('class.member_message_list.php');
     
     $message_list = new member_message_list();
     $message_list->set_reader_id( $this->get_id() );
     $message_list->set_author_id( $_SESSION['watch_id'] );
     $message_list->load_all();
     return $message_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_member_message_list_count()
    {
     require_once('class.member_message_list.php');
     
     $message_list = new member_message_list();
     $message_list->set_reader_id( $this->get_id() );
     $message_list->set_author_id( $_SESSION['watch_id'] );
     $count = $message_list->get_all_count();
     return $count;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_receiver_unread_author_message_list()
    {
     require_once('class.receiver_unread_author_message_list.php');
     
     $message_list = new receiver_unread_author_message_list();
     $message_list->set_reader_id( $_SESSION['watched_id'] );
     $message_list->set_author_id( $this->get_id() );
     $message_list->load_unread();
     
     return $message_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_receiver_unread_author_message_list_count()
    {
     require_once('class.receiver_unread_author_message_list.php');
     
     $message_list = new receiver_unread_author_message_list();
     $message_list->set_reader_id( $_SESSION['watched_id'] );
     $message_list->set_author_id( $this->get_id() );
     $count = $message_list->get_unread_count();
     
     return $count;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_receiver_unread_all_message_list_count()
    {
     require_once('class.receiver_unread_all_message_list.php');
     
     $message_list = new receiver_unread_all_message_list();
     $message_list->set_reader_id( $this->get_id() );
     $count = $message_list->get_unread_count();
     
     return $count;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_news_list()
    {
     require_once('class.news_list.php');
     
     $news_list = new news_list();
     $news_list->set_owner_id( $this->get_id() );
     $news_list->load_member_news();
     return $news_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_team_list()
    {
     require_once('class.team_list.php');
     
     $team_list = new team_list();
     $team_list->set_owner_id( $this->get_id() );
     $team_list->load_member_teams();
     return $team_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_all_team_list()
    {
     require_once('class.team_list.php');
     
     $team_list = new team_list();
     $team_list->set_owner_id( $this->get_id() );
     $team_list->load_member_all_teams();
     return $team_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_kontakt_list()
    {
     require_once('class.member_list.php');
     require_once('class.team_list.php');
     
     $kontakt_list = new member_list();
     
     $team_list = new team_list();
     $team_list->set_owner_id( $this->get_id() );
     $team_list->load_member_teams();
     
     $member_list = new member_list();
     for( $n=0; $n<$team_list->get_item_count(); $n++ )
     {
     $team = $team_list->get_item( $n );
     $member_list = $team->get_member_list();
     for( $i=0; $i<$member_list->get_item_count(); $i++ )
     {
     $kontakt_list->add_exclusive( $member_list->get_item( $i ) );
     }
     }
     return $kontakt_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_member_kontakt_message_list()
    {
     require_once('class.member_kontakt_message_list.php');
     
     $member_list = new member_kontakt_message_list();
     $member_list->set_owner_id( $this->get_id() );
     $member_list->load();
     
     return $member_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_admin_team_list()
    {
     require_once('class.team_list.php');
     
     $team_list = new team_list();
     $team_list->set_owner_id( $this->get_id() );
     $team_list->load_admin_teams();
     return $team_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_toplevel_team_list()
    {
     require_once('class.team_list.php');
     
     $team_list = new team_list();
     $team_list->set_owner_id( $this->get_id() );
     $team_list->load_toplevel_list();
     return $team_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_all_toplevel_team_list()
    {
     require_once('class.team_list_all.php');
     
     $team_list = new team_list_all();
     $team_list->load_toplevel_list();
     return $team_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  starttime
     * @param  endtime
     */
    public function get_cal_event_list($starttime, $endtime)
    {
     require_once('class.event_list.php');
     
     $event_list = new event_list();
     $team_list = $this->get_team_list();
     for ( $n = 0; $n < $team_list->get_item_count(); $n++ )
     {
     $team = $team_list->get_item( $n );
     $event_list->merge_sort_up( $team->
     get_cal_event_list( $starttime, $endtime ) );
     }
     return $event_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_task_list()
    {
     require_once('class.task_list.php');
     
     $task_list = new task_list();
     $task_list->set_owner_id( $this->get_id() );
     $task_list->load_receiver_task();
     $task_list->load_author_task();
     return $task_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_active_receiver_task_list()
    {
     require_once('class.task_list_user.php');
     
     $task_list = new task_list_user();
     $task_list->set_owner_id( $this->get_id() );
     $task_list->load_active_receiver_task();
     return $task_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_active_receiver_task_count()
    {
     require_once('class.task_list_user.php');
     
     $task_list = new task_list_user();
     $task_list->set_owner_id( $this->get_id() );
     $count = $task_list->get_active_receiver_task_count();
     return $count;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_active_receiver_undo_task_list()
    {
     require_once('class.task_list_user.php');
     
     $task_list = new task_list_user();
     $task_list->set_owner_id( $this->get_id() );
     $task_list->load_active_receiver_undo_task();
     return $task_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_active_receiver_undo_task_count()
    {
     require_once('class.task_list_user.php');
     
     $task_list = new task_list_user();
     $task_list->set_owner_id( $this->get_id() );
     $count = $task_list->get_active_receiver_undo_task_count();
     return $count;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_active_receiver_do_task_list()
    {
     require_once('class.task_list_user.php');
     
     $task_list = new task_list_user();
     $task_list->set_owner_id( $this->get_id() );
     $task_list->load_active_receiver_do_task();
     return $task_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_active_receiver_do_task_count()
    {
     require_once('class.task_list_user.php');
     
     $task_list = new task_list_user();
     $task_list->set_owner_id( $this->get_id() );
     $count = $task_list->get_active_receiver_do_task_count();
     return $count;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_archived_receiver_task_list()
    {
     require_once('class.task_list_user.php');
     
     $task_list = new task_list_user();
     $task_list->set_owner_id( $this->get_id() );
     $task_list->load_archived_receiver_task();
     return $task_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_archived_receiver_task_count()
    {
     require_once('class.task_list_user.php');
     
     $task_list = new task_list_user();
     $task_list->set_owner_id( $this->get_id() );
     $count = $task_list->get_archived_receiver_task_count();
     return $count;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_active_author_task_list()
    {
     require_once('class.task_list_user.php');
     
     $task_list = new task_list_user();
     $task_list->set_owner_id( $this->get_id() );
     $task_list->load_active_author_task();
     return $task_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_active_author_task_count()
    {
     require_once('class.task_list_user.php');
     
     $task_list = new task_list_user();
     $task_list->set_owner_id( $this->get_id() );
     $count = $task_list->get_active_author_task_count();
     return $count;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_active_author_undo_task_count()
    {
     require_once('class.task_list_user.php');
     
     $task_list = new task_list_user();
     $task_list->set_owner_id( $this->get_id() );
     $count = $task_list->get_active_author_undo_task_count();
     return $count;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_archived_author_task_list()
    {
     require_once('class.task_list_user.php');
     
     $task_list = new task_list_user();
     $task_list->set_owner_id( $this->get_id() );
     $task_list->load_archived_author_task();
     return $task_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_archived_author_task_count()
    {
     require_once('class.task_list_user.php');
     
     $task_list = new task_list_user();
     $task_list->set_owner_id( $this->get_id() );
     $count = $task_list->get_archived_author_task_count();
     return $count;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_article_list()
    {
     require_once('class.member_article_list.php');
     
     $article_list = new member_article_list();
     $article_list->set_owner_id( $this->get_id() );
     $article_list->load();
     return $article_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_article_list_count()
    {
     require_once('class.member_article_list.php');
     
     $article_list = new member_article_list();
     $article_list->set_owner_id( $this->get_id() );
     $count = $article_list->get_count();
     return $count;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  search_tag
     * @param  network_id
     */
    public function get_member_search_list($search_tag, $network_id)
    {
     require_once('class.member_list_search.php');
     
     $member_list = new member_list_search();
     $member_list->set_tag( $search_tag );
     $member_list->set_network_id( $network_id );
     $member_list->load();
     return $member_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  search_tag
     * @param  network_id
     */
    public function get_team_search_list($search_tag, $network_id)
    {
     require_once('class.team_list_search.php');
     
     $team_list = new team_list_search();
     $team_list->set_tag( $search_tag );
     $team_list->set_network_id( $network_id );
     $team_list->load();
     return $team_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  search_tag
     * @param  network_id
     */
    public function get_event_search_list($search_tag, $network_id)
    {
     require_once('class.event_list_search.php');
     
     $event_list = new event_list_search();
     $event_list->set_tag( $search_tag );
     $event_list->set_network_id( $network_id );
     $event_list->load();
     return $event_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_event_list()
    {
     require_once('class.event_list.php');
     
     $event_list = new event_list();
     $event_list->add( $this->get_active_interview_event_list() );
     $event_list->add( $this->get_active_invitation_event_list() );
     $event_list->add( $this->get_active_information_event_list() );
     return $event_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_active_interview_event_list()
    {
     require_once('class.event_list_user.php');
     
     $event_list = new event_list_user();
     $event_list->set_owner_id( $this->get_id() );
     $event_list->load_active_interview_event_list();
     return $event_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_archived_interview_event_list()
    {
     require_once('class.event_list_user.php');
     
     $event_list = new event_list_user();
     $event_list->set_owner_id( $this->get_id() );
     $event_list->load_archived_interview_event_list();
     return $event_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_active_invitation_event_list()
    {
     require_once('class.event_list_user.php');
     
     $event_list = new event_list_user();
     $event_list->set_owner_id( $this->get_id() );
     $event_list->load_active_invitation_event_list();
     return $event_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_archived_invitation_event_list()
    {
     require_once('class.event_list_user.php');
     
     $event_list = new event_list_user();
     $event_list->set_owner_id( $this->get_id() );
     $event_list->load_archived_invitation_event_list();
     return $event_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_active_information_event_list()
    {
     require_once('class.event_list.php');
     
     $event_list = new event_list();
     $team_list = $this->get_all_team_list();
     for ( $n = 0; $n < $team_list->get_item_count(); $n++ )
     {
     $team = $team_list->get_item( $n );
     $event_list->merge_sort_up( 
     $team->get_active_information_event_list() );
     }
     return $event_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_archived_information_event_list()
    {
     require_once('class.event_list.php');
     
     $event_list = new event_list();
     $team_list = $this->get_all_team_list();
     for ( $n = 0; $n < $team_list->get_item_count(); $n++ )
     {
     $team = $team_list->get_item( $n );
     $event_list->merge_sort_up( 
     $team->get_archived_information_event_list() );
     }
     return $event_list;
    }
}?>