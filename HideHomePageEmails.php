<?php 

namespace Vanderbilt\HideHomePageEmails;

class HideHomePageEmails extends \ExternalModules\AbstractExternalModule
{
    function hook_project_home_page() 
	{
		if ($this->getProjectSetting('hide-user-list') === true) {
			?>
			<style type="text/css">#user_list { display: none; }</style>
			<script type="text/javascript">
			$(function(){
				$('#user_list').parent().hide();
			});
			</script>
			<?php
		} else {			
			?>
			<script type="text/javascript">
			$(function(){
				$('div#user_list a').each(function(){
					$(this).parent().hide();
				});
			});
			</script>
			<?php
		}
	}
}
