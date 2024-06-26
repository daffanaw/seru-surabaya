"use strict";
var maxx = 10;
var KTKBootstrapTouchspin = {
	init: function () {
		$("#kt_touchspin_1, #kt_touchspin_2_1").TouchSpin({
			buttondown_class: "btn btn-secondary",
			buttonup_class: "btn btn-secondary",
			min: 0,
			max: 10,
			step: 0.1,
			decimals: 2,
			boostat: 5,
			maxboostedstep: 10,
		}),
			$("#kt_touchspin_2, #kt_touchspin_2_2").TouchSpin({
				buttondown_class: "btn btn-secondary",
				buttonup_class: "btn btn-secondary",
				min: -1e9,
				max: 1e9,
				stepinterval: 50,
				maxboostedstep: 1e7,
				prefix: "$",
			}),
			$("#kt_touchspin_3, #kt_touchspin_2_3").TouchSpin({
				buttondown_class: "btn btn-secondary",
				buttonup_class: "btn btn-secondary",
				min: -1e9,
				max: 1e9,
				stepinterval: 50,
				maxboostedstep: 1e7,
				postfix: "$",
			}),
			$("#kt_touchspin_4, #kt_touchspin_2_4").TouchSpin({
				buttondown_class: "btn btn-secondary",
				buttonup_class: "btn btn-secondary",
				verticalbuttons: !0,
				verticalup: '<i class="ki ki-plus"></i>',
				verticaldown: '<i class="ki ki-minus"></i>',
			}),
			$("#kt_touchspin_5, .kt_touchspin_2_5").TouchSpin({
				buttondown_class: "btn btn-secondary",
				buttonup_class: "btn btn-secondary",
				verticalbuttons: !0,
				min: 0,
				max: maxx,
				verticalup: '<i class="ki ki-arrow-up"></i>',
				verticaldown: '<i class="ki ki-arrow-down"></i>',
			}),
			$("#kt_touchspin_1_validate").TouchSpin({
				buttondown_class: "btn btn-secondary",
				buttonup_class: "btn btn-secondary",
				min: -1e9,
				max: 1e9,
				stepinterval: 50,
				maxboostedstep: 1e7,
				prefix: "$",
			}),
			$("#kt_touchspin_2_validate").TouchSpin({
				buttondown_class: "btn btn-secondary",
				buttonup_class: "btn btn-secondary",
				min: 0,
				max: 100,
				step: 0.1,
				decimals: 2,
				boostat: 5,
				maxboostedstep: 10,
			}),
			$("#kt_touchspin_3_validate").TouchSpin({
				buttondown_class: "btn btn-secondary",
				buttonup_class: "btn btn-secondary",
				verticalbuttons: !0,
				verticalupclass: "ki ki-plus",
				verticaldownclass: "ki ki-minus",
			});
	},
};
jQuery(document).ready(function () {
	KTKBootstrapTouchspin.init();
});
