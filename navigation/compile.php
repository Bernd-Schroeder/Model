<?php

$files = 
[
"class.navigation_list.php",
"class.basic_item.php",

"class.A_navigation.php",
"class.A_on_navigation.php",
"class.A_off_navigation.php",
"class.A15_on_navigation.php",
"class.A15_off_navigation.php",

"class.visibility_type_item.php",
"class.video_navigation_item.php",
"class.document_navigation_item.php",
"class.image_navigation_item.php",
"class.task_author_navigation_item.php",
"class.task_receiver_navigation_item.php",
"class.event_navigation_item.php",
"class.message_navigation_item.php",
"class.unread_message_navigation_item.php",
"class.basic_navigation_item.php",

"class.basic_navigation.php",
"class.basic_member_navigation.php",
"class.member_owner_navigation.php",
"class.member_requesting_navigation.php",
"class.member_approving_navigation.php",
"class.member_approved_navigation.php",
"class.member_same_group_navigation.php",
"class.member_without_connection_navigation.php",
"class.member_globadmin_navigation.php",
"class.globadmin_navigation.php",

"class.basic_team_navigation.php",
"class.team_owner_navigation.php",
"class.team_admin_navigation.php",
"class.team_requesting_navigation.php",
"class.team_approving_navigation.php",
"class.team_approved_navigation.php",
"class.team_approved_navigation_lt18.php",
"class.team_approving_admin_navigation.php",
"class.team_is_sub_group_navigation.php",
"class.team_without_connection_navigation.php",
"class.team_without_connection_navigation_lt18.php",
"class.team_globadmin_navigation.php",

"class.basic_event_navigation.php",
"class.event_admin_navigation.php",
"class.event_requesting_navigation.php",
"class.event_approving_navigation.php",
"class.event_approved_navigation.php",
"class.event_approved_navigation_lt18.php",
"class.event_approving_admin_navigation.php",
"class.event_without_connection_navigation.php",
"class.event_without_connection_navigation_lt18.php",
"class.event_interview_navigation.php"
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