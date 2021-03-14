$(document).ready(function() {
	var baseUrl = $("#baseUrl").data("url");
	$(".datatable").DataTable();
	$(".select2").select2();
	$(".datepicker").datepicker({
		format: "yyyy-mm-dd"
	});

	$("button[type='reset']").click(function() {
		$(".select2")
			.val(null)
			.trigger("change");
	});
	$(".confirm-alert").click(function(e) {
		e.preventDefault();
		var url = $(this).attr("href");
		var text = $(this).data('alert')
		var submit = $(this).data('submit')
		swal(
			{
				title: "Apakah anda yakin?",
				text: text,
				type: "warning",
				showCancelButton: true,
				confirmButtonColor: "#DD6B55",
				confirmButtonText: submit,
				closeOnConfirm: false
			},
			function() {
				window.location = url;
			}
		);
	});

});
