jQuery(document).ready(function(){

    jQuery("#listaArbol").treeview({
		persist: "location",
		collapsed: true,
	        animated: "slow",
	        control:"#sidetreecontrol",
	});
});
