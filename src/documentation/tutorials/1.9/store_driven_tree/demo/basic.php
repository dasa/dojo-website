<?php
	include_once($_SERVER['DOCUMENT_ROOT'] . implode('/', array_slice(explode('/', dirname($_SERVER['PHP_SELF'])), 0, 4)) . '/Utils.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Demo: Dijit Tree</title>
		<link rel="stylesheet" href="../../../resources/style/demo.css" media="screen">
		<link rel="stylesheet" href="style.css" media="screen">
		<?php
			Utils::printClaroCss();
		?>
	</head>

	<body class="claro">
		<h1>Demo: Dijit Tree</h1>
		<div class="column" id="tree">
			<h1>Tree</h1>
			<div id="divTree"></div>
		</div>
		<div class="column">
			<h1>Image</h1>
			<img id="image" />
		</div>

		<?php
			Utils::printDojoScript();
		?>
		<script>
			require([
				"dojo/dom",
				"dojo/json",
				"dojo/store/Memory",
				"dijit/tree/ObjectStoreModel",
				"dijit/Tree",
				"dojo/text!./data/small.json",
				"dojo/domReady!" 
			], function(dom, json, Memory, ObjectStoreModel, Tree, data){

				// set up the store to get the tree data
				var governmentStore = new Memory({
					data: [ json.parse(data) ],
					getChildren: function(object){
						return object.children || [];
					}
				});

				// set up the model, assigning governmentStore, and assigning method to identify leaf nodes of tree
				var governmentModel = new ObjectStoreModel({
					store: governmentStore,
					query: {id: 'root'},
					mayHaveChildren: function(item){
						return "children" in item;
					}
				});

				// set up the tree, assigning governmentModel;
				var governmentTree = new Tree({
					model: governmentModel,
					onOpenClick: true,
					onLoad: function(){
						dom.byId('image').src = '../resources/images/root.jpg';
					},
					onClick: function(item){
						dom.byId('image').src = '../resources/images/'+item.id+'.jpg';

					},
					persist: false
				}, "divTree");
				governmentTree.startup();
			});
		</script>
	</body>
</html>
