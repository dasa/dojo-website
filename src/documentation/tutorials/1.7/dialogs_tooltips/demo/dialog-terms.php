<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Demo: Terms and Conditions</title>


		<?php
    		include_once($_SERVER['DOCUMENT_ROOT'] . implode('/', array_slice(explode('/', dirname($_SERVER['PHP_SELF'])), 0, 4)) . '/Utils.php');
    		Utils::printClaroCss();
    	?>
		<link rel="stylesheet" href="../../../resources/style/demo.css" media="screen">
	</head>
	<body class="claro">
		<h1>Demo: Terms and Conditions</h1>

		<button type="button" data-dojo-type="dijit.form.Button" data-dojo-props="onClick:showDialog">View Terms and Conditions</button>

		<div class="dijitHidden">
		<div data-dojo-type="dijit.Dialog" style="width:600px;" data-dojo-props="title:'Terms and Conditions'" id="terms">
			<p><strong>Please agree to the following terms and conditions:</strong></p>
			<div style="height:160px;overflow-y:scroll;border:1px solid #769dc4;padding:0 10px;width:560px;"><p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed suscipit massa. Aenean vel turpis tincidunt velit gravida venenatis. In iaculis urna non quam tincidunt elementum. Nunc pellentesque aliquam dui, ac facilisis massa sollicitudin et. Donec tincidunt vulputate ultrices. Duis eu risus ut ipsum auctor scelerisque non quis ante. Nam tempor lobortis justo, et rhoncus mauris cursus et. Mauris auctor congue lectus auctor ultrices. Aenean quis feugiat purus. Cras ornare vehicula tempus. Nunc placerat, lorem adipiscing condimentum sagittis, augue velit ornare odio, eget semper risus est et erat.
			</p>
			<p>
			Donec odio enim, aliquam eu facilisis eu, venenatis sit amet felis. Etiam pharetra arcu ut augue tincidunt convallis. Fusce malesuada mauris massa, a porttitor lorem. Nullam risus erat, bibendum ut sodales at, scelerisque ut odio. Mauris viverra ultricies mi, eu congue risus hendrerit id. Praesent magna leo, egestas eget ullamcorper a, auctor nec nunc. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed nec nisl eget enim bibendum gravida sed ac est. Aliquam volutpat elementum urna ut malesuada. Mauris faucibus tincidunt odio ac venenatis. Quisque eleifend sem nec dui gravida nec feugiat libero interdum. Quisque ultricies nisi non arcu lobortis fringilla. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi porttitor, justo vel suscipit lobortis, enim odio tincidunt nunc, non pharetra lacus dolor a nisl. Vivamus porta venenatis libero vitae commodo.
			</p>
			<p>
			Cras lacinia imperdiet mi, pretium interdum ante pellentesque et. Quisque commodo metus at velit feugiat fringilla interdum eros ornare. Praesent varius libero quis quam vehicula dapibus. Nam commodo tristique ipsum quis sagittis. In hac habitasse platea dictumst. Morbi eget leo sit amet erat placerat fermentum eu a nunc. Ut scelerisque justo eu odio placerat lobortis. In ultrices sapien ut mauris pharetra varius. Fusce tempus accumsan orci, ac gravida libero venenatis sit amet. Curabitur malesuada vulputate iaculis.
			</p>
			<p>
			Nullam metus nulla, viverra sit amet aliquet a, dignissim a eros. Nunc cursus, sapien vel vestibulum aliquet, magna nibh rutrum nulla, sed condimentum nunc mauris at ante. Cras ornare turpis adipiscing massa ultricies a tempus lorem hendrerit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec laoreet ipsum tincidunt mi pellentesque sit amet mollis tortor tempus. Maecenas at purus ac odio sollicitudin congue a non augue. Aliquam eleifend porttitor fermentum. Curabitur non justo ipsum. Duis lectus felis, fermentum sed aliquet interdum, eleifend sit amet leo. Vivamus magna diam, suscipit nec fringilla sit amet, ultrices vitae dui. Cras ut justo non velit mollis blandit.
			</p>
			<p>
			Pellentesque molestie consequat nisi ac interdum. Pellentesque augue quam, viverra sodales vestibulum eget, aliquam id quam. Suspendisse sed mauris augue, at tempus tortor. Quisque tincidunt metus eu turpis condimentum a fringilla leo sagittis. Integer ac felis nunc. Vivamus eu dictum sem. Vestibulum quis ligula sed elit semper hendrerit id ac enim. Curabitur convallis cursus mauris nec pulvinar. Fusce semper risus a ante pretium elementum. Donec tellus metus, iaculis in suscipit at, venenatis non mauris. Sed nec justo sed nulla ornare hendrerit vitae pharetra magna. Quisque eu felis felis, et venenatis odio.
			</p></div>
			<br>
			<button type="button" data-dojo-type="dijit.form.Button" data-dojo-props="onClick:hideDialog">I Agree</button>
			<button type="button" data-dojo-type="dijit.form.Button" data-dojo-props="onClick:doAlert">I Don't Agree</button>

		</div>
		</div>

		<!-- load dojo and provide config via data attribute -->
		<?php
			include_once($_SERVER['DOCUMENT_ROOT'] . implode('/', array_slice(explode('/', dirname($_SERVER['PHP_SELF'])), 0, 4)) . '/Utils.php');
			Utils::printDojoScript();
		?>
		<script>
			// Require the Dialog class
			require(["dijit/registry", "dojo/parser", "dijit/Dialog", "dijit/form/Button", "dojo/domReady!"], function(registry, parser){
				// Show the dialog
				window.showDialog = function() {
					registry.byId("terms").show();
				}
				// Hide the dialog
				window.hideDialog = function() {
					registry.byId("terms").hide();
				}
				// Force them to provide an answer
				window.doAlert = function() {
					alert("You must agree!");
				}
				parser.parse();
			});
		</script>
	</body>
</html>
