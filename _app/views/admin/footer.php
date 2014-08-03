<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="<?=base_url('js/plugins/bootstrap.min.js');?>"></script>
<script src="<?=base_url('js/tinymce/tinymce.min.js');?>"></script>
<!-- TinyMCE plugin script -->
<script>
	tinymce.init({
		selector : 'textarea',
		height : 200,
		script_url : '<?=site_url("js/tinymce/tinymce.min.js");?>',
		theme : 'modern',
		plugins : [ 
			"advlist autolink link image lists charmap preview hr anchor spellchecker searchreplace",
			"visualblocks visualchars code fullscreen insertdatetime media nonbreaking wordcount",
			"save table contextmenu emoticons paste textcolor" 
		],
		toolbar: "insertfile undo redo | styleselect | bold italic |  bullist numlist | ink print preview fullpage",
		autosave_interval: "20s",
	});
</script>
<!-- IE 10+ media query reset -->
<script>
	if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
	  var msViewportStyle = document.createElement('style')
	  msViewportStyle.appendChild(
	  document.createTextNode(
		'@-ms-viewport{width:auto!important}'
		)
	  );
	  document.querySelector('head').appendChild(msViewportStyle);
	}
</script>
<!-- declare site url for ajax requests -->
<script>
  var url = "<?=site_url();?>";
</script>
<!-- load ajax script -->
<script src="<?=base_url('js/admin-ajax.js');?>"></script>
</body>
</html>