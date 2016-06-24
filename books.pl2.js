<style type="text/css" title="currentStyle">
	@import "jquery/dataTable/css/demo_page.css";		/* No need I think - kesavan July27,2012*/
	@import "jquery/dataTable/css/demo_table.css";
</style>
	<!-- jQuery -->
<script type="text/javascript" language="javascript" src="tmp/media/js/jquery.js">			  </script>
<script type="text/javascript" language="javascript" src="tmp/media/js/jquery.dataTables.js">		  </script>
<script type="text/javascript" language="javascript" src="tmp/media/js/jquery.dataTables.columnFilter.js"></script>

<script type="text/javascript" charset="utf-8">
	$(document).ready(function() {
			$('#example').dataTable
			( 
				{
					"oLanguage": {"sSearch": "Search all columns:"	},
					"aaSorting": [[ 0, "asc" ]],	/* COLUMN ASC/DESC */
					'iDisplayLength': 50
				}
			)
		        .columnFilter({
				aoColumns: [
					{ type: "select", values: [ 'Video', 'Skin' , 'Repo / Media','PVR IPTV EPG','Music','General','Weather']  },
					{ type: "text"},
					{ type: "text"},
					{ type: "text"},
					{ type: "text"}
				]
			});
	});
</script>
