<?
$arUrlRewrite = array(
	array(
		"CONDITION" => "#^/tekhnologii/(.*?).html(\\?.*\$|\$)#",
		"RULE" => "&ELEMENT_CODE=\$1",
		"ID" => "",
		"PATH" => "/tekhnologii/detail.php",
	),
	array(
		"CONDITION" => "#^/produktsiya/(.+?)/(\\?|\$)#",
		"RULE" => "SECTION_CODE=\$1&",
		"ID" => "",
		"PATH" => "/produktsiya/index.php",
	),
);

?>