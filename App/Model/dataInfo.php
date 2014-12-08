<?php 
 class dataInfo {
public static $admins=array
(
"admin_Id" => array
(
"type" => "bigint(20) unsigned",
"size" => "bigint(20) unsigned",
"isNull" => 1-1,
"isKey" => 1-1,
"default" => "",
"isAuto" =>1-1
),
"admin_Username" => array
(
"type" => "varchar(30)",
"size" => "varchar(30)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"admin_Password" => array
(
"type" => "varchar(200)",
"size" => "varchar(200)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"admin_Level" => array
(
"type" => "int(11)",
"size" => "int(11)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"admin_IsDel" => array
(
"type" => "bit(1)",
"size" => "bit(1)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
));
public static $blogs=array
(
"blog_Id" => array
(
"type" => "bigint(20) unsigned",
"size" => "bigint(20) unsigned",
"isNull" => 1-1,
"isKey" => 1-1,
"default" => "",
"isAuto" =>1-1
),
"blog_Title" => array
(
"type" => "varchar(100)",
"size" => "varchar(100)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"blog_brief" => array
(
"type" => "varchar(400)",
"size" => "varchar(400)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"blog_UserId" => array
(
"type" => "bigint(20)",
"size" => "bigint(20)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"blog_url" => array
(
"type" => "varchar(60)",
"size" => "varchar(60)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"blog_IsIndex" => array
(
"type" => "bit(1)",
"size" => "bit(1)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"blog_IsPublic" => array
(
"type" => "bit(1)",
"size" => "bit(1)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"blog_IsDel" => array
(
"type" => "bit(1)",
"size" => "bit(1)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
));
public static $blogthemes=array
(
"blogTheme_Url" => array
(
"type" => "varchar(60)",
"size" => "varchar(60)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"blogTheme_Id" => array
(
"type" => "bigint(20) unsigned",
"size" => "bigint(20) unsigned",
"isNull" => 1-1,
"isKey" => 1-1,
"default" => "",
"isAuto" =>1-1
),
"blogTheme_Name" => array
(
"type" => "varchar(20)",
"size" => "varchar(20)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"blogTheme_IsDel" => array
(
"type" => "varchar(2)",
"size" => "varchar(2)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
));
public static $comments=array
(
"comment_Id" => array
(
"type" => "bigint(20) unsigned",
"size" => "bigint(20) unsigned",
"isNull" => 1-1,
"isKey" => 1-1,
"default" => "",
"isAuto" =>1-1
),
"comment_PublicTime" => array
(
"type" => "datetime",
"size" => "datetime",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"comment_UserId" => array
(
"type" => "mediumtext",
"size" => "mediumtext",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"comment_StampNumber" => array
(
"type" => "int(11)",
"size" => "int(11)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"comment_PraiseNumber" => array
(
"type" => "int(11)",
"size" => "int(11)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"commnet_Body" => array
(
"type" => "varchar(400)",
"size" => "varchar(400)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"comment_IsDel" => array
(
"type" => "bit(1)",
"size" => "bit(1)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
));
public static $forums=array
(
"forum_Id" => array
(
"type" => "bigint(20) unsigned",
"size" => "bigint(20) unsigned",
"isNull" => 1-1,
"isKey" => 1-1,
"default" => "",
"isAuto" =>1-1
),
"forum_Name" => array
(
"type" => "varchar(20)",
"size" => "varchar(20)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"forum_ModeratorId" => array
(
"type" => "int(11)",
"size" => "int(11)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"forum_Module" => array
(
"type" => "int(11)",
"size" => "int(11)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"forum_IsDel" => array
(
"type" => "bit(1)",
"size" => "bit(1)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
));
public static $levels=array
(
"level_Id" => array
(
"type" => "bigint(20) unsigned zerofill",
"size" => "bigint(20) unsigned zerofill",
"isNull" => 1-1,
"isKey" => 1-1,
"default" => "",
"isAuto" =>-1
),
"level_Name" => array
(
"type" => "varchar(30)",
"size" => "varchar(30)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"level_Experience" => array
(
"type" => "int(11)",
"size" => "int(11)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"level_IsDel" => array
(
"type" => "bit(1)",
"size" => "bit(1)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
));
public static $newclass=array
(
"newClass_Id" => array
(
"type" => "bigint(20) unsigned",
"size" => "bigint(20) unsigned",
"isNull" => 1-1,
"isKey" => 1-1,
"default" => "",
"isAuto" =>1-1
),
"newClass_Name" => array
(
"type" => "varchar(20)",
"size" => "varchar(20)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"newClass_IsDel" => array
(
"type" => "bit(1)",
"size" => "bit(1)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
));
public static $news=array
(
"new_Id" => array
(
"type" => "bigint(20)",
"size" => "bigint(20)",
"isNull" => 1-1,
"isKey" => 1-1,
"default" => "",
"isAuto" =>1-1
),
"new_Title" => array
(
"type" => "varchar(40)",
"size" => "varchar(40)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"new_Brief" => array
(
"type" => "varchar(400)",
"size" => "varchar(400)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"new_Body" => array
(
"type" => "varchar(100)",
"size" => "varchar(100)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"new_Image" => array
(
"type" => "varchar(100)",
"size" => "varchar(100)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"new_IsDel" => array
(
"type" => "bit(1)",
"size" => "bit(1)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"new_PublicTime" => array
(
"type" => "datetime",
"size" => "datetime",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"new_UserId" => array
(
"type" => "mediumtext",
"size" => "mediumtext",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"new_IsReview" => array
(
"type" => "bit(1)",
"size" => "bit(1)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"new_ScanNumber" => array
(
"type" => "int(11)",
"size" => "int(11)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"new_Class" => array
(
"type" => "bigint(20)",
"size" => "bigint(20)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
));
public static $posts=array
(
"post_Id" => array
(
"type" => "bigint(20) unsigned",
"size" => "bigint(20) unsigned",
"isNull" => 1-1,
"isKey" => 1-1,
"default" => "",
"isAuto" =>1-1
),
"post_UserId" => array
(
"type" => "bigint(20)",
"size" => "bigint(20)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"post_Title" => array
(
"type" => "varchar(50)",
"size" => "varchar(50)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"post_Body" => array
(
"type" => "varchar(800)",
"size" => "varchar(800)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"post_PublicTime" => array
(
"type" => "datetime",
"size" => "datetime",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"post_OwnForumId" => array
(
"type" => "bigint(20)",
"size" => "bigint(20)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"post_StampNumber" => array
(
"type" => "int(11)",
"size" => "int(11)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"post_PraiseNumber" => array
(
"type" => "int(11)",
"size" => "int(11)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"post_OwnPostId" => array
(
"type" => "bigint(20)",
"size" => "bigint(20)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"post_BestAnswer" => array
(
"type" => "bigint(20)",
"size" => "bigint(20)",
"isNull" => -1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"post_IsDel" => array
(
"type" => "bit(1)",
"size" => "bit(1)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
));
public static $studys=array
(
"study_Id" => array
(
"type" => "bigint(20) unsigned",
"size" => "bigint(20) unsigned",
"isNull" => 1-1,
"isKey" => 1-1,
"default" => "",
"isAuto" =>1-1
),
"study_Title" => array
(
"type" => "varchar(100)",
"size" => "varchar(100)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"study_Body" => array
(
"type" => "text",
"size" => "text",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"study_UserId" => array
(
"type" => "mediumtext",
"size" => "mediumtext",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"study_PublicTime" => array
(
"type" => "datetime",
"size" => "datetime",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"study_AppendFile" => array
(
"type" => "varchar(50)",
"size" => "varchar(50)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"study_IsDel" => array
(
"type" => "bit(1)",
"size" => "bit(1)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
));
public static $talks=array
(
"talk_Id" => array
(
"type" => "bigint(20) unsigned",
"size" => "bigint(20) unsigned",
"isNull" => 1-1,
"isKey" => 1-1,
"default" => "",
"isAuto" =>1-1
),
"talk_UserId" => array
(
"type" => "bigint(20)",
"size" => "bigint(20)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"talk_OperId" => array
(
"type" => "bigint(20)",
"size" => "bigint(20)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"talk_StartTime" => array
(
"type" => "datetime",
"size" => "datetime",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"talk_IsDel" => array
(
"type" => "bit(1)",
"size" => "bit(1)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
));
public static $technologys=array
(
"technology_Id" => array
(
"type" => "bigint(20) unsigned",
"size" => "bigint(20) unsigned",
"isNull" => 1-1,
"isKey" => 1-1,
"default" => "",
"isAuto" =>1-1
),
"technology_Brief" => array
(
"type" => "varchar(500)",
"size" => "varchar(500)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"technology_Title" => array
(
"type" => "varchar(100)",
"size" => "varchar(100)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"technology_UserId" => array
(
"type" => "bigint(20)",
"size" => "bigint(20)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"technology_Url" => array
(
"type" => "varchar(100)",
"size" => "varchar(100)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"technology_PublicTime" => array
(
"type" => "datetime",
"size" => "datetime",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"technology_OwnForumId" => array
(
"type" => "bigint(20)",
"size" => "bigint(20)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"technology_StampNumber" => array
(
"type" => "int(11)",
"size" => "int(11)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"technology_Type" => array
(
"type" => "int(11)",
"size" => "int(11)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"technology_PraiseNumber" => array
(
"type" => "int(11)",
"size" => "int(11)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"technology_IsDel" => array
(
"type" => "bit(1)",
"size" => "bit(1)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
));
public static $users=array
(
"user_Id" => array
(
"type" => "bigint(20)",
"size" => "bigint(20)",
"isNull" => 1-1,
"isKey" => 1-1,
"default" => "",
"isAuto" =>1-1
),
"user_Username" => array
(
"type" => "varchar(32)",
"size" => "varchar(32)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"user_Password" => array
(
"type" => "varchar(32)",
"size" => "varchar(32)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"user_Email" => array
(
"type" => "varchar(100)",
"size" => "varchar(100)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"user_Level" => array
(
"type" => "bigint(20)",
"size" => "bigint(20)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"user_Experience" => array
(
"type" => "bigint(20)",
"size" => "bigint(20)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"user_FocusUserIds" => array
(
"type" => "varchar(1000)",
"size" => "varchar(1000)",
"isNull" => -1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"user_HeadImage" => array
(
"type" => "varchar(100)",
"size" => "varchar(100)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"user_SaveBlogIds" => array
(
"type" => "varchar(1000)",
"size" => "varchar(1000)",
"isNull" => -1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"user_Status" => array
(
"type" => "int(1)",
"size" => "int(1)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"user_BlogThemeId" => array
(
"type" => "int(11)",
"size" => "int(11)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"user_IsDel" => array
(
"type" => "int(11)",
"size" => "int(11)",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
),
"user_RegTime" => array
(
"type" => "datetime",
"size" => "datetime",
"isNull" => 1-1,
"isKey" => -1,
"default" => "",
"isAuto" =>-1
));
}
?>