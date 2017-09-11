<?php 

namespace Vanderbilt\HideHomePageEmails;

class HideHomePageEmails extends \ExternalModules\AbstractExternalModule
{
    function hook_project_home_page() 
	{
		echo "<script type='text/javascript'>
				$(function(){
					$('div#user_list a').each(function(){
						$(this).parent().hide();
					});
				});
			</script>";
	}
}
