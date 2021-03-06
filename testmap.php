<div id="myExcelDiv" style="width: 800px; height: 700px"></div>
<script type="text/javascript" src="https://r.office.microsoft.com/r/rlidExcelWLJS?v=1&kip=1"></script>
<script type="text/javascript">
	/*
	 * This code uses the Microsoft Office Excel Javascript object model to programmatically insert the
	 * Excel Web App into a div with id=myExcelDiv. The full API is documented at
	 * https://msdn.microsoft.com/en-US/library/hh315812.aspx. There you can find out how to programmatically get
	 * values from your Excel file and how to use the rest of the object model. 
	 */

	// Use this file token to reference entity_mapplot.xlsx in Excel's APIs
	var fileToken = "SD1BFD45774E15A7B!141/126052786677832315/t=0&s=0&v=!AFpDC5tKkxK3hlo";

	// run the Excel load handler on page load
	if (window.attachEvent) {
		window.attachEvent("onload", loadEwaOnPageLoad);
	} else {
		window.addEventListener("DOMContentLoaded", loadEwaOnPageLoad, false);
	}

	function loadEwaOnPageLoad() {
		var props = {
			uiOptions: {
				showGridlines: false,
				showRowColumnHeaders: false,
				showParametersTaskPane: false
			},
			interactivityOptions: {
				allowTypingAndFormulaEntry: false,
				allowParameterModification: false,
				allowSorting: false,
				allowFiltering: false,
				allowPivotTableInteractivity: false
			}
		};

		Ewa.EwaControl.loadEwaAsync(fileToken, "myExcelDiv", props, onEwaLoaded);
	}

	function onEwaLoaded(result) {
		/*
		 * Add code here to interact with the embedded Excel web app.
		 * Find out more at https://msdn.microsoft.com/en-US/library/hh315812.aspx.
		 */
	}
</script>