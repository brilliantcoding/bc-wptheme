<?php
/**
 * The global HTML head
 *
 * @package Brilliantcoding
 */
?>
<?php $data = get_query_var('template_data');?>


<meta charset="<?php echo $data['bloginfo']['charset']; ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', '<?php echo $data['theme']['mod_gatrackingid']; ?>', 'auto',{
		'anonymizeIp': true,
		'storage': 'none',
		'storeGac': false,
		'siteSpeedSampleRate': 90
	});
	ga('require', 'autotrack');
	ga('send', 'pageview');
</script>