<?php

$files = 
[
"class.basic_team_list.php",
"class.team_navigation.php",
"class.basic_member_list.php",
"class.member_navigation.php",
"class.basic_event_list.php",
"class.event_navigation.php",
"class.csv_document.php",
"class.document.php",
"class.document_list.php",
"class.event.php",
"class.event_article.php",
"class.event_article_comment.php",
"class.event_article_comment_list.php",
"class.event_article_list.php",
"class.event_list.php",
"class.event_list_team.php",
"class.event_list_team_user.php",
"class.event_list_user.php",
"class.event_list_calendar.php",
"class.event_list_search.php",
"class.event_member_list.php",
"class.image.php",
"class.image_list.php",
"class.member.php",
"class.member_article.php",
"class.member_article_comment.php",
"class.member_article_comment_list.php",
"class.member_article_list.php",
"class.member_kontakt_list.php",
"class.member_kontakt_message_list.php",
"class.member_follower.php",
"class.member_follower_list.php",
"class.member_list.php",
"class.member_list_csv.php",
"class.member_list_search.php",
"class.member_message.php",
"class.member_message_list.php",
"class.receiver_unread_all_message_list.php",
"class.receiver_unread_author_message_list.php",
"class.news.php",
"class.news_list.php",
"class.forbidden_word_list.php",
"class.task.php",
"class.task_list.php",
"class.task_list_user.php",
"class.task_list_team.php",
"class.team.php",
"class.team_article.php",
"class.team_article_comment.php",
"class.team_article_comment_list.php",
"class.team_article_list.php",
"class.team_article_list_XXX.php",
"class.team_event_list.php",
"class.team_member_list.php",
"class.team_list.php",
"class.team_list_all.php",
"class.team_my_list.php",
"class.team_list_search.php",
"class.team_list_csv.php",
"class.control_time_table_item_list.php",
"class.time_table_item.php",
"class.time_table_item_list.php",
"class.time_table_item_list_day.php",
"class.time_table_item_list_three_week.php",
"class.video.php",
"class.video_list.php",
"class.team_member.php",
"class.event_member.php",
"class.team_team.php",
"class.team_event.php",
"class.message_media_list.php",
"class.csv_list.php",
"class.room.php",
"class.room_list.php",
"class.room_list_abbreviation.php"
];

foreach ($files as  $name ) 
{
    echo $name . "<br />";
    write_file( $name );
}

function write_file( $name )
{
$myFile = $name;
$buffer;
$file_array = array();
$function_array = array();
$comment_array = array();
$string_line;
$pos;
$before_operaton = TRUE;
$first_run = FALSE;

$handle = fopen($myFile, 'r') or die("can't open file");

// read the complete file into a buffer named file_array
while (($buffer = fgets($handle, 4096)) !== false)
{ 
if ( strpos($buffer, '#') !== false )
    $first_run = TRUE;
    
$file_array[] = $buffer; 
} 
fclose($handle);

$handle = fopen($myFile, 'w') or die("can't open file");
foreach ($file_array as $string_line) 
{
    if ( $first_run )
    {
        if ( $before_operaton )
        { 
            fwrite($handle, $string_line );
            if ( strpos($string_line, 'OPERATIONS') !== false )
            { 
                $before_operaton = FALSE; 
            }
        }   
        else
        {
            // handle after operation
            if ( strpos($string_line, '#') !== false )
            {
                $pos = strpos($string_line, '#');
                $function_array[] = substr( $string_line, $pos + 1 );
            }
        
            elseif ( strpos($string_line, '*') == 5 )
            { 
                $comment_array[] = $string_line; 
            }

            elseif ( strpos($string_line, 'function') !== false )
            {
                fwrite($handle, "" );
                foreach ($comment_array as $comment_line)
                {
                    fwrite($handle, $comment_line );
                }
                fwrite($handle, $string_line );
                fwrite($handle, "    {" . "\n" );
                foreach ($function_array as $string_line)
                {
                    fwrite($handle, "     " . $string_line );
                }
                fwrite($handle, "    }" . "\n" );

                unset( $comment_array );
                unset( $function_array );
            }
            else 
            {
            echo "...."; // do nothing
            }
        }
    }
    else
    {
        fwrite($handle, $string_line );
    }
}
if ( $first_run )
{
fwrite($handle, "}" );
fwrite($handle, "?>" );
}

fclose($handle);
}

?>