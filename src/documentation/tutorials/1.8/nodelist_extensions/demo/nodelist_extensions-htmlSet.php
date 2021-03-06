<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Demo: NodeList Extensions: .html()</title>
		<link rel="stylesheet" href="style.css" media="screen">
		<link rel="stylesheet" href="../../../resources/style/demo.css" media="screen">
		<?php
			include_once($_SERVER['DOCUMENT_ROOT'] . implode('/', array_slice(explode('/', dirname($_SERVER['PHP_SELF'])), 0, 4)) . '/Utils.php');
			Utils::printClaroCss();
		?>
	</head>
	<body class="claro">
		<h1>Demo: NodeList Extensions: .html()</h1>
		<button type="button" id="btn">Add Checkboxes</button>

		<ul>
			<li>Fruits
				<ul>
					<li class="alkaline">Apples</li>
					<li class="alkaline">Persimmons</li>
					<li class="alkaline">Thompson Grapes (Seedless)</li>
					<li class="alkaline">Muscat Grapes</li>
					<li class="alkaline">All Sweet Grapes</li>
					<li class="alkaline">Fresh Figs</li>
					<li class="alkaline">Dates</li>
					<li class="alkaline">Figs</li>
					<li class="alkaline">Raisins</li>
					<li class="alkaline">Prunes</li>
					<li class="alkaline">Apricots</li>
					<li class="alkaline">Peaches</li>
					<li class="alkaline">Bananas</li>
					<li class="alkaline">Cherries</li>
					<li class="alkaline">Bananas</li>
					<li class="alkaline">Litchi "Nuts"</li>
					<li class="alkaline">Carob</li>
				</ul>
		</ul>		
		<?php
			Utils::printDojoScript("async: true");
		?>
		<script>
			require(["dojo/query", "dojo/_base/lang", "dijit/form/CheckBox", "dojo/NodeList-html", "dojo/domReady!"], function(query, lang){
				
				var demo = {
					addCheckboxes: function(q){
						query(q).html('<input name="fruit" value="" data-dojo-type="dijit/form/CheckBox">', {
							onBegin: function() {
								var label = lang.trim(this.node.innerHTML), 
									cont = this.content + label;
								cont = cont.replace('value=""', 'value="'+lang.trim(this.node.innerHTML) + '"');

								this.content = cont;
								return this.inherited("onBegin", arguments);
							},
							parseContent: true
						});
						query("#btn").map(function(node){
							node.disabled = "disabled";
						});
					}
				}

				query("#btn").on("click", lang.hitch(demo, "addCheckboxes", "li.alkaline"));
			});
		</script>
	</body>
</html>
