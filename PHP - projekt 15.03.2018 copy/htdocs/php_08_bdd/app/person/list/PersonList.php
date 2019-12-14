<?php
require_once getConf()->root_path.'/scripts/bootstrap/database.php';
require_once getConf()->root_path.'/scripts/bootstrap.php';
?>

{extends file=$conf->root_path|cat:"/templates/main.php"}
{extends file=$conf->root_path|cat:"/scripts/bootstrap/database.php"}
{extends file=$conf->root_path|cat:"/scripts/bootstrap.php"}
{block name=top}

<header id="top" class="header">
	<nav class="site-nav">
		<div class="container">
			<div style="float: left;padding-top: 15px; padding-right: 100px; padding-left: 100px; ">
				<a class="link logo" href="{$conf->app_url}/index.php">DR PC</a>
			</div>


            {foreach $page as $row}
                {strip}
                    <li>
                        <p style="text-align: center; color: #f2f2f2; padding-top: 15px;"  class="list" >
                            <a href="{$conf->action_url}postsOpenSingle1&id={$row['id']}">{$row["title"]}</a>
                        </p>
                    </li>



                {/strip}
            {/foreach}



			<div style="float: left">
				<ul class="list">



					<div style="float: left;padding-top: 15px; padding-left: 150px; padding-right: 15px;"> <li >
						<a  href="{$conf->app_url}/index.php" class="link">Home</a>
					</li></div>

                    <!-- LOGOWANIE!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
					<div style="float: left;padding: 15px;"><li >
						<a href="{$conf->app_url}/admin/auth/login.php" class="link login">Accounts</a>
					</li></div>

					<div style="float: left;padding: 15px;"><li >
						<a id="id_newsletter" href="#" class="link">Newsletter</a>
					</li></div>

					<div style="float: left;padding: 15px;"> <li >

					</li></div>
				</ul>

			</div>

			<div style="clear: both"></div>
		</div>

	</nav>

	<div class="go-top">
		<a class="icon-up" href="#top">Go top</a>
	</div>

</header>

{/block}

{block name=contener}

{foreach $posts as $row }
{strip}

</br>
</br>
    <div id="middle-content" class="container-fluid">
            <div class="col-md-12 col-sm-12 col-xs-12 loop-single-post">
                <div class="col-md-12 col-sm-12 col-xs-12 loop-single-title">
                    <p><a href="{$conf->action_url}postsOpenSingle&id={$row['id']}">{$row["title"]}</a></p>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 loop-single-excerpt">
                    {$row['excerpt']}
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 loop-single-info">
                    <div class="col-md-4 col-sm-4 col-xs-12 no-padding">
                        <i class="fa fa-hashtag"></i>
                        {$row['post_name']}
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 no-padding">
                        <i class="fa fa-calendar-check-o"></i>{$row['created']}
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 no-padding">
                        <i class="fa fa-user"></i>
                    </div>
                </div>
            </div>
    </div>

{/strip}
{/foreach}

{/block}



{block name=bottom}


<div  id="footer-content">
	<section class="newsletter">
		<div id="newsletter" class="container">
			<h3 class="headline-3"><span class="primary-text">Subscribe our</span>
				<span class="secondary-text">Newsletter</span></h3>
			<p class="paragraph">Subscribe, we will send you our weekly hot offers</p>
            <!-- <form class="subscribe" action="{$conf->action_root}newsletterNew" method="post"> -->
        <br>
        <br>
        <br>
            <form action="{$conf->action_root}newsletterNew" method="post"
                  >
                <fieldset style="border-style: none " class="subscribe">
                    <div>

                        <input id="author" type="text" name="author"
                               value="{$form->author}" placeholder="Enter your Name" class="subscribe-field">
                    </div>
                    <div class="subscribe-field">

                        <input id="email" type="text" placeholder="Enter your Email" name="email"
                               value="{$form->email}" class="subscribe-field">
                    </div>
                    <div class="subscribe-field" >
                        <input  type="submit" class="btn"
                                value="Send us"/>
                    </div>
                </fieldset>
                <input type="hidden" name="id" value="{$form->id}">
            </form>
        </div>
    </section>
<div class="foot-menu" id="contac_us">
	<nav class="foot-nav" >
		<section class="column">
			<h4 class="headline-4">Company</h4>
			<ul class="list">
				<li class="menu-item"> <a href="#home" class="link">Home</a> </li>
				<li class="menu-item"> <a href="#about-us" class="link">About us</a> </li>
				<li class="menu-item"> <a href="#services" class="link">Services</a> </li>
				<li class="menu-item"> <a href="#footer" class="link">Contact us</a> </li>
			</ul>
		</section>
		<section class="column">
			<h4 class="headline-4">Quick links</h4>
			<ul class="list">
				<li> <a href="" class="link">Designers</a> </li>
				<li> <a href="" class="link">Pricing plan</a> </li>
				<li> <a href="" class="link">Services</a> </li>
				<li> <a href="" class="link">Download</a> </li>
			</ul>
		</section>
		<section class="column">
			<h4 class="headline-4">Conditions</h4>
			<ul class="list">
				<li> <a href="" class="link">Online support</a> </li>
				<li> <a href="" class="link">Privacy</a> </li>
				<li> <a href="" class="link">Terms</a> </li>
				<li> <a href="" class="link">Policy</a> </li>
			</ul>
		</section>
		<section class="column get-connected">
			<h4 class="headline-4GetConnected">Get connected</h4>
			<ul class="socials list">
				<li class="list-item"> <a href="" class="icon icon-facebook"></a> </li>
				<li class="list-item"> <a href="" class="icon icon-twitter"></a> </li>
				<li class="list-item"> <a href="" class="icon icon-gplus"></a> </li>
			</ul>
			<div class="contact">
				<a href="tel:1234567890" class="link tb-tel">
					<i class="icon icon-phone"></i>
					123 456 7890
				</a>
				<a href="mailto:sampel@name.com" class="link tb-mail">
					<i class="icon icon-mail"></i>
					sampel@name.com
				</a>
			</div>
		</section>
	</nav>
</div>
</div>


</tbody>

{/block}
