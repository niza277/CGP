<div id="myExcelDiv" style="width: 850px; height: 600px"></div>
<script type="text/javascript" src="https://r.office.microsoft.com/r/rlidExcelWLJS?v=1&kip=1"></script>
<script type="text/javascript">

	// Use this file token to reference result_DEC2015-Topic Modelling.xlsx in Excel's APIs
	var fileToken = "SD1BFD45774E15A7B!152/126052786677832315/t=0&s=0&v=!AHFCpcG1Tz8YbRY";

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
				showRowColumnHeaders: false
			},
			interactivityOptions: { }
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