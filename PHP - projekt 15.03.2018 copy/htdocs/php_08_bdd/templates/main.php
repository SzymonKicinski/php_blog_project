<?php
require_once getConf()->root_path.'/scripts/bootstrap/database.php';
require_once getConf()->root_path.'/scripts/bootstrap.php';
?>

<!DOCTYPE html>
<html>
<head>
  	<title></title>
	<meta charset="UTF-8">
	<title>Dr PC</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type='text/javascript' src='{$conf->app_url}/resource/js/jquery-2.1.1.min.js'></script>
	<script type='text/javascript' src='{$conf->app_url}/resource/js/bootstrap.min.js'></script>
	<script type='text/javascript' src='{$conf->app_url}/resource/js/ '></script>
	<link rel="stylesheet" href="{$conf->app_url}/resource/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{$conf->app_url}/resource/css/layout.css">
	<title>DR PC</title>

	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700&amp;subset=latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{$conf->app_url}/resource/js/slick.css"/>
	<link rel="stylesheet" type="text/css" href="{$conf->app_url}/resource/css/style.css">

	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="{$conf->app_url}/resource/js/slick.min.js"></script>
	<script type="text/javascript" src="{$conf->app_url}/resource/js/script.js"></script>
	<script type="text/javascript" src="{$conf->app_url}/resource/js/jquery.scrollTo.min.js"></script>

	<script>

        jQuery(function ($)
            {
                $.scrollTo(0);
                $('#id_newsletter').click(function () { $.scrollTo($('#newsletter'), 1000 ); });
                $('#id_contac_us').click(function () { $.scrollTo($('#contac_us'), 1000 ); });
            }
        );
	</script>
</head>

<body>


{block name=top} {/block}
</br>
</br>
</br>

{block name=contener} {/block}


{block name=messages}

<div class="bottom-margin">
{if $msgs->isError()}
<div class="messages error">
	<ol>
	{foreach $msgs->getErrors() as $err}
	{strip}
		<li>{$err}</li>
	{/strip}
	{/foreach}
	</ol>
</div>
{/if}

{if $msgs->isInfo()}
<div class="messages info">
	<ol>
	{foreach $msgs->getInfos() as $inf}
	{strip}
		<li>{$inf}</li>
	{/strip}
	{/foreach}
	</ol>
</div>
{/if}
</div>

{/block}

{block name=bottom}


{/block}

</body>

</html>