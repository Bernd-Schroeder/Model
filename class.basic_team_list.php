<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.basic_team_list.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 15.11.2016, 10:06:58 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include generated_team
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('generated/class.generated_team.php');

/* user defined includes */
// section 10-5-25-73-4eb7a804:14a54468563:-8000:00000000000014B1-includes begin
// section 10-5-25-73-4eb7a804:14a54468563:-8000:00000000000014B1-includes end

/* user defined constants */
// section 10-5-25-73-4eb7a804:14a54468563:-8000:00000000000014B1-constants begin
// section 10-5-25-73-4eb7a804:14a54468563:-8000:00000000000014B1-constants end

/**
 * Short description of class basic_team_list
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class basic_team_list
    extends generated_team
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_upteam_list()
    {
     require_once('class.team_list.php');
     
     $team_list = new team_list();
     $team_list->set_owner_id( $this->get_id() );
     $team_list->load_upteam_list();
     return $team_list;
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
    public function get_subteam_list()
    {
     require_once('class.team_list.php');
     
     // get all subteams from this team
     $team_list = new team_list();
     $team_list->set_owner_id( $this->get_id() );
     $team_list->load_subteam_list();
     return $team_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  member
     */
    public function get_my_subteam_list($member)
    {
     require_once('class.team_my_list.php');
     
     // get all subteams from this team where member_id is member of
     $team_list = new team_my_list();
     $team_list->set_owner_id( $this->get_id() );
     $team_list->set_member_id( $member->get_id() );
     $team_list->load();
     return $team_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_member_list_count()
    {
     require_once('class.team_member_list.php');
     
     $list = new team_member_list();
     $list->set_owner_id( $this->get_id() );
     $count = $list->get_team_members_count();
     return $count;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_admin_member_list()
    {
     require_once('class.member_list.php');
     
     $member_list = new member_list();
     $member_list->set_owner_id( $this->get_id() );
     $member_list->load_admin_team_members();
     return $member_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_requested_admin_list()
    {
     require_once('class.member_list.php');
     
     $member_list = new member_list();
     $member_list->set_owner_id( $this->get_id() );
     $member_list->load_requested_admin_team_members();
     return $member_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_member_list()
    {
     require_once('class.member_list.php');
     
     $member_list = new member_list();
     $member_list->set_owner_id( $this->get_id() );
     $member_list->load_team_members();
     return $member_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_all_member_list()
    {
     require_once('class.member_list.php');
     
     $member_list = new member_list();
     $member_list->set_owner_id( $this->get_id() );
     $member_list->load_all_team_members();
     return $member_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_interview_member_list_count()
    {
     $interview_invitations = (int)0;
    
     $up_team = $this->get_upteam();
     // catch all the approved members in all sub - teams
     $pupil_list = $up_team->get_approved_recursive_pupil_list();
     for ( $n=0; $n < $pupil_list->get_item_count(); $n++ )
     {
     // get all members - 1 by 1
     $pupil = $pupil_list->get_item( $n );
     // get all the followers from this member
     $follower_list = $pupil->get_follower_member_list();
     if ($follower_list->get_item_count() > (int)0 )
     { $interview_invitations++; }
     }
     return $interview_invitations;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_requested_member_list()
    {
     require_once('class.member_list.php');
     
     $member_list = new member_list();
     $member_list->set_owner_id( $this->get_id() );
     $member_list->load_requested_team_members();
     return $member_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_approved_member_list()
    {
     require_once('class.member_list.php');
     
     $member_list = new member_list();
     $member_list->set_owner_id( $this->get_id() );
     $member_list->load_approved_team_members();
     return $member_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_approved_recursive_pupil_list()
    {
     require_once('class.member_list.php');

     if( $this->get_type() == (int)3 )
     { $appoved_list = $this->get_approved_member_list(); }
     else
     { $appoved_list = new member_list(); }
    
     $subteam_list = $this->get_subteam_list();
     
     for( $i=0; $i<$subteam_list->get_item_count(); $i++ )
     {
     $subteam = $subteam_list->get_item( $i );
     $sub_appoved_list = $subteam->get_approved_recursive_pupil_list();
     $appoved_list->add_list_exclusive( $sub_appoved_list, (int)0 );
     }
     
     return $appoved_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_article_list()
    {
     require_once('class.team_article_list.php');
     
     $article_list = new team_article_list();
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
     require_once('class.team_article_list.php');
     
     $article_list = new team_article_list();
     $article_list->set_owner_id( $this->get_id() );
     $count = $article_list->get_count();
     return $count;
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
     $task_list->load_team_task();
     return $task_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_active_receiver_task_list()
    {
     require_once('class.task_list_team.php');
     
     $task_list = new task_list_team();
     $task_list->set_owner_id( $this->get_id() );
     $task_list->set_user_id( $_SESSION['watch_id'] );
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
     require_once('class.task_list_team.php');
     
     $task_list = new task_list_team();
     $task_list->set_owner_id( $this->get_id() );
     $task_list->set_user_id( $_SESSION['watch_id'] );
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
     require_once('class.task_list_team.php');
     
     $task_list = new task_list_team();
     $task_list->set_owner_id( $this->get_id() );
     $task_list->set_user_id( $_SESSION['watch_id'] );
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
     require_once('class.task_list_team.php');
     
     $task_list = new task_list_team();
     $task_list->set_owner_id( $this->get_id() );
     $task_list->set_user_id( $_SESSION['watch_id'] );
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
     require_once('class.task_list_team.php');
     
     $task_list = new task_list_team();
     $task_list->set_owner_id( $this->get_id() );
     $task_list->set_user_id( $_SESSION['watch_id'] );
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
     require_once('class.task_list_team.php');
     
     $task_list = new task_list_team();
     $task_list->set_owner_id( $this->get_id() );
     $task_list->set_user_id( $_SESSION['watch_id'] );
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
     require_once('class.task_list_team.php');
     
     $task_list = new task_list_team();
     $task_list->set_owner_id( $this->get_id() );
     $task_list->set_user_id( $_SESSION['watch_id'] );
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
     require_once('class.task_list_team.php');
     
     $task_list = new task_list_team();
     $task_list->set_owner_id( $this->get_id() );
     $task_list->set_user_id( $_SESSION['watch_id'] );
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
     require_once('class.task_list_team.php');
     
     $task_list = new task_list_team();
     $task_list->set_owner_id( $this->get_id() );
     $task_list->set_user_id( $_SESSION['watch_id'] );
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
     require_once('class.task_list_team.php');
     
     $task_list = new task_list_team();
     $task_list->set_owner_id( $this->get_id() );
     $task_list->set_user_id( $_SESSION['watch_id'] );
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
     require_once('class.task_list_team.php');
     
     $task_list = new task_list_team();
     $task_list->set_owner_id( $this->get_id() );
     $task_list->set_user_id( $_SESSION['watch_id'] );
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
     require_once('class.task_list_team.php');
     
     $task_list = new task_list_team();
     $task_list->set_owner_id( $this->get_id() );
     $task_list->set_user_id( $_SESSION['watch_id'] );
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
     require_once('class.task_list_team.php');
     
     $task_list = new task_list_team();
     $task_list->set_owner_id( $this->get_id() );
     $task_list->set_user_id( $_SESSION['watch_id'] );
     $count = $task_list->get_archived_author_task_count();
     return $count;
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
     require_once('class.event_list_calendar.php');
     
     $event_list = new event_list_calendar();
     $event_list->set_owner_id( $this->get_id() );
     $event_list->set_starttime( $starttime );
     $event_list->set_endtime( $endtime );
     $event_list->load();
     
     $up_team = $this->get_upteam();
     if ( $up_team != null )
     {
     $up_event_list = $up_team->get_cal_event_list( $starttime, $endtime );
     if ( $up_event_list->get_item_count() > 0 )
     { $event_list->merge_sort_up( $up_event_list ); }
     }
     return $event_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_team_list()
    {
     require_once('class.team_list.php');
     
     // is not in use !
     $team_list = new team_list();
     $team_list->set_owner_id( $this->get_id() );
     $team_list->load_team_list();
     return $team_list;
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
     $event_list->set_owner_id( $this->get_id() );
     $event_list->load_team_events();
     return $event_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_active_interview_event_list()
    {
     require_once('class.event_list_team_user.php');
     
     $event_list = new event_list_team_user();
     $event_list->set_owner_id( $this->get_id() );
     $event_list->set_user_id( $_SESSION['watch_id'] );
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
     require_once('class.event_list_team_user.php');
     
     $event_list = new event_list_team_user();
     $event_list->set_owner_id( $this->get_id() );
     $event_list->set_user_id( $_SESSION['watch_id'] );
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
     require_once('class.event_list_team_user.php');
     
     $event_list = new event_list_team_user();
     $event_list->set_owner_id( $this->get_id() );
     $event_list->set_user_id( $_SESSION['watch_id'] );
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
     require_once('class.event_list_team_user.php');
     
     $event_list = new event_list_team_user();
     $event_list->set_owner_id( $this->get_id() );
     $event_list->set_user_id( $_SESSION['watch_id'] );
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
     require_once('class.event_list_team.php');
     
     $event_list = new event_list_team();
     $event_list->set_owner_id( $this->get_id() );
     $event_list->load_active_information_event_list();
     return $event_list;
    }
    /**
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function get_archived_information_event_list()
    {
     require_once('class.event_list_team.php');
     
     $event_list = new event_list_team();
     $event_list->set_owner_id( $this->get_id() );
     $event_list->load_archived_information_event_list();
     return $event_list;
    }
}?>