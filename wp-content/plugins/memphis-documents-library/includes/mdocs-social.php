<?php
function mdocs_social($the_mdoc, $page_type='site') {
	if(is_numeric($the_mdoc)) {
		$the_mdoc = get_the_mdoc_by($the_mdoc, 'id');
		ob_start();
		$the_permalink = get_permalink($the_mdoc['parent']);
		if($the_mdoc['show_social'] ==='on' && get_option('mdocs-show-social') ) { ?>
		<div class="mdocs-social-container">
			<div class="mdocs-tweet"><a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo $the_permalink;?>" data-counturl="<?php echo $the_permalink;?>" data-text="<?php echo __('Download','memphis-documents-library').' #'.strtolower(preg_replace('/-| /','_',$the_mdoc['name'])).' #MemphisDocumentsLibrary'; ?>" width="50">Tweet</a></div>
			
			<div class="mdocs-like"><div class="fb-like" data-href="<?php echo $the_permalink;?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div></div>
			<div class="mdocs-linkedin"><script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script><script type="IN/Share" data-url="<?php echo $the_permalink;?>" data-counter="right"></script></div>
			<div class="mdocs-plusone" ><div class="g-plusone" data-size="medium" data-href="<?php echo $the_permalink;?>"></div></div>
		</div>
		<?php
		}
		//mdocs_social_scripts();
		$the_social = ob_get_clean();
		return $the_social;
	}
	$the_rating = mdocs_get_rating($the_mdoc);
	ob_start();
	if(get_option('mdocs-hide-all-posts') == false && get_option('mdocs-hide-all-files') == false || is_user_logged_in() &&  get_option('mdocs-hide-all-posts-non-members') ) {
		$the_permalink = get_permalink($the_mdoc['parent']);
		$the_direct_download = get_site_url().'/?mdocs-file='.$the_mdoc['id'].'&mdocs-url=false';
		?>
		<div class="mdocs-social-container <?php if($page_type == 'dashboard') echo 'mdocs-socail-dashboard'; ?>"  id="mdocs-social-<?php echo $the_mdoc['id']; ?>" >
			<?php if(get_option('mdocs-show-share')) { ?>
			<div class="mdocs-share" onclick="mdocs_share('<?php echo $the_permalink; ?>','<?php echo $the_direct_download; ?>', 'mdocs-social-<?php echo $the_mdoc['id']; ?>');"><p><i class="fa fa-share mdocs-green" aria-hidden="true"></i> <?php _e('Share', 'memphis-documents-library'); ?></p></div>
			<?php } ?>
		<?php if($the_mdoc['show_social'] ==='on' && get_option('mdocs-show-social') ) { ?>
			<div class="mdocs-tweet"><a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo $the_permalink;?>" data-counturl="<?php echo $the_permalink;?>" data-text="<?php echo __('Download','memphis-documents-library').' #'.strtolower(preg_replace('/-| /','_',$the_mdoc['name'])).' #MemphisDocumentsLibrary'; ?>" >Tweet</a></div>
			<div class="mdocs-like"><div class="fb-like" data-href="<?php echo $the_permalink;?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div></div>
			
			<div class="mdocs-linkedin"><script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script><script type="IN/Share" data-url="<?php echo $the_permalink;?>" data-counter="right"></script></div>
			<div class="mdocs-plusone" ><div class="g-plusone" data-size="medium" data-href="<?php echo $the_permalink;?>"></div></div>
			
			<?php
		}
	} else {
		?>
		<div class="mdocs-social"  >
			<!--<h2><?php _e('This page is hidden to all users accepts admins.','memphis-documents-library'); ?></h2>-->
		<?php
	}
	$the_social = ob_get_clean();
	return $the_social;
}

function mdocs_social_scripts() {
	?>
<div id="fb-root"></div>
<script>
//FACEBOOK LIKE
(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&amp;status=0&amp;appId=12345";
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
//TWITTER TWEET
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
//GOOGLE +1
(function() {
  var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
  po.src = 'https://apis.google.com/js/plusone.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
})();
</script>
	<?php
}
?>