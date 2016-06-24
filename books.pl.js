<style type="text/css" title="currentStyle">
	@import "jquery/dataTable/css/demo_page.css";		/* No need I think - kesavan July27,2012*/
	@import "jquery/dataTable/css/demo_table.css";
</style>
	<!-- jQuery -->
<script type="text/javascript" language="javascript" src="jquery/jquery.js"></script>
<script type="text/javascript" language="javascript" src="jquery/dataTable/jquery.dataTables.js"></script>
<script type="text/javascript" language="javascript" src="jquery/dataTable/jquery.dataTables.columnFilter.js"></script>
<script type="text/javascript" charset="utf-8">
	var asInitVals = new Array();
	
	$(document).ready(function() {
		/*var oTable = $('#books').dataTable( {*/
		var oTable = $('table.display').dataTable( {
			"oLanguage": {
				"sSearch": "Search all columns:"
			},
			 "aaSorting": [[ 0, "asc" ]],	/* COLUMN ASC/DESC */
			  'iDisplayLength': 50
		}
		
		);
		
		$("tfoot input").keyup( function () {
			/* Filter on the column (the index) of this element */
			oTable.fnFilter( this.value, $("tfoot input").index(this) );
		} );
		
		
		
		/*
		 * Support functions to provide a little bit of 'user friendlyness' to the textboxes in 
		 * the footer
		 */
		$("tfoot input").each( function (i) {
			asInitVals[i] = this.value;
		} );
		
		$("tfoot input").focus( function () {
			if ( this.className == "search_init" )
			{
				this.className = "";
				this.value = "";
			}
		} );
		
		$("tfoot input").blur( function (i) {
			if ( this.value == "" )
			{
				this.className = "search_init";
				this.value = asInitVals[$("tfoot input").index(this)];
			}
		} );
	} );
</script>
