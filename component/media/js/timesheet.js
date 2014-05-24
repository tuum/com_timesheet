(function($)
{
	$(document).ready(function()
	{
		function calculateTotal() {
		    var result = new Object();

		    result.total = parseFloat($("#billable_mon").val())+parseFloat($("#billable_tue").val())+parseFloat($("#billable_wed").val())+parseFloat($("#billable_thu").val())+parseFloat($("#billable_fri").val())+parseFloat($("#billable_sat").val())+parseFloat($("#billable_sun").val());
		    $('#total_hours').val(result.total);
		}

		$("#billable_mon").bind("change",calculateTotal);
		$("#billable_tue").bind("change",calculateTotal);
		$("#billable_wed").bind("change",calculateTotal);
		$("#billable_thu").bind("change",calculateTotal);
		$("#billable_fri").bind("change",calculateTotal);
		$("#billable_sat").bind("change",calculateTotal);
		$("#billable_sun").bind("change",calculateTotal);
	});

})(jQuery);