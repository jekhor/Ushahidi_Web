<?php blocks::open("news");?>
<?php blocks::title('Twitter');?>
<br/>
<script src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
	version: 2,
		type: 'search',
		search: '#velocrash',
		interval: 30000,
		title: '',
		subject: '',
		width: 'auto',
		height: 300,
		theme: {
			shell: {
				background: '#ffffff',
					color: '#ffffff'
			},
			tweets: {
				background: '#ffffff',
					color: '#444444',
					links: '#a85c19'
			}
		},
			features: {
				scrollbar: false,
					loop: true,
					live: true,
					behavior: 'default'
			}
}).render().start();
</script>


</div>
<?php blocks::close();?>
