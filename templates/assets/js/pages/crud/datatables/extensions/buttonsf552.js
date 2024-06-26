"use strict";
var KTDatatablesExtensionButtons = {
	init: function () {
		var t;
		$("#kt_datatable1").DataTable({
			responsive: !0,
			dom: "<'row'<'col-sm-6 text-left'f><'col-sm-6 text-right'B>>\n\t\t\t<'row'<'col-sm-12'tr>>\n\t\t\t<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>",
			buttons: ["print", "copyHtml5", "excelHtml5", "csvHtml5", "pdfHtml5"],
			columnDefs: [
				{
					width: "75px",
					targets: 6,
					render: function (t, e, l, a) {
						var n = {
							1: { title: "Pending", class: "label-light-primary" },
							2: { title: "Delivered", class: " label-light-danger" },
							3: { title: "Canceled", class: " label-light-primary" },
							4: { title: "Success", class: " label-light-success" },
							5: { title: "Info", class: " label-light-info" },
							6: { title: "Danger", class: " label-light-danger" },
							7: { title: "Warning", class: " label-light-warning" },
						};
						return void 0 === n[t]
							? t
							: '<span class="label label-lg font-weight-bold' +
									n[t].class +
									' label-inline">' +
									n[t].title +
									"</span>";
					},
				},
				{
					width: "75px",
					targets: 7,
					render: function (t, e, l, a) {
						var n = {
							1: { title: "Online", state: "danger" },
							2: { title: "Retail", state: "primary" },
							3: { title: "Direct", state: "success" },
						};
						return void 0 === n[t]
							? t
							: '<span class="label label-' +
									n[t].state +
									' label-dot mr-2"></span><span class="font-weight-bold text-' +
									n[t].state +
									'">' +
									n[t].title +
									"</span>";
					},
				},
			],
		}),
			(t = $("#kt_datatable2").DataTable({
				responsive: !0,
				buttons: ["print", "copyHtml5", "excelHtml5", "csvHtml5", "pdfHtml5"],
				processing: !0,
				serverSide: !0,
				ajax: {
					url: HOST_URL + "/api/datatables/demos/server.php",
					type: "POST",
					data: {
						columnsDef: [
							"OrderID",
							"Country",
							"ShipCity",
							"ShipAddress",
							"CompanyAgent",
							"CompanyName",
							"Status",
							"Type",
						],
					},
				},
				columns: [
					{ data: "OrderID" },
					{ data: "Country" },
					{ data: "ShipCity" },
					{ data: "ShipAddress" },
					{ data: "CompanyAgent" },
					{ data: "CompanyName" },
					{ data: "Status" },
					{ data: "Type" },
				],
				columnDefs: [
					{
						targets: 6,
						render: function (t, e, l, a) {
							var n = {
								1: { title: "Pending", class: "label-light-primary" },
								2: { title: "Delivered", class: " label-light-danger" },
								3: { title: "Canceled", class: " label-light-primary" },
								4: { title: "Success", class: " label-light-success" },
								5: { title: "Info", class: " label-light-info" },
								6: { title: "Danger", class: " label-light-danger" },
								7: { title: "Warning", class: " label-light-warning" },
							};
							return void 0 === n[t]
								? t
								: '<span class="label label-lg font-weight-bold' +
										n[t].class +
										' label-inline">' +
										n[t].title +
										"</span>";
						},
					},
					{
						targets: 7,
						render: function (t, e, l, a) {
							var n = {
								1: { title: "Online", state: "danger" },
								2: { title: "Retail", state: "primary" },
								3: { title: "Direct", state: "success" },
							};
							return void 0 === n[t]
								? t
								: '<span class="label label-' +
										n[t].state +
										' label-dot mr-2"></span><span class="font-weight-bold text-' +
										n[t].state +
										'">' +
										n[t].title +
										"</span>";
						},
					},
				],
			})),
			$("#export_print").on("click", function (e) {
				e.preventDefault(), t.button(0).trigger();
			}),
			$("#export_copy").on("click", function (e) {
				e.preventDefault(), t.button(1).trigger();
			}),
			$("#export_excel").on("click", function (e) {
				e.preventDefault(), t.button(2).trigger();
			}),
			$("#export_csv").on("click", function (e) {
				e.preventDefault(), t.button(3).trigger();
			}),
			$("#export_pdf").on("click", function (e) {
				e.preventDefault(), t.button(4).trigger();
			});
	},
};
jQuery(document).ready(function () {
	KTDatatablesExtensionButtons.init();
});
