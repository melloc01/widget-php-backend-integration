<!DOCTYPE html>
<html>
<head>
	<title>Soonsy & Veridu Integration</title>
	<meta charset="utf-8">
	<style type="text/css">
		.text-center {
			text-align: center;
		}
	</style>
</head>
<body>

	<br>
	<br>
	
	<div class="text-center">
		<div id="veridu-embedded_widget"></div>
	</div>
	
	<script src="https://widget.veridu.com/0.3/olc?key=YOUR_WIDGET_KEY&name=YOUR_WIDGET_NAME_ID" charset="utf-8"></script>

	<script type="text/javascript">
		var opened = false;

		window.addEventListener('Veridu.EmbeddedWidget', function (evt) {
			var widget = VeriduEmbeddedWidget,
				payload = evt.payload;

			if (! opened && payload.data && payload.data.user) {
				opened = true;
				window.open('/api.php?session=' + widget.cfg.olc.session + '&username=' + widget.cfg.olc.username);
			}
		});
	</script>

</body>
</html>