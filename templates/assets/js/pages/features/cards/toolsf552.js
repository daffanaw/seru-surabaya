"use strict";
var KTCardTools = {
	init: function () {
		var e;
		(toastr.options.showDuration = 1e3),
			(e = new KTCard("kt_card_1")).on("beforeCollapse", function (e) {
				setTimeout(function () {
					toastr.info("Before collapse event fired!");
				}, 100);
			}),
			e.on("afterCollapse", function (e) {
				setTimeout(function () {
					toastr.warning("Before collapse event fired!");
				}, 2e3);
			}),
			e.on("beforeExpand", function (e) {
				setTimeout(function () {
					toastr.info("Before expand event fired!");
				}, 100);
			}),
			e.on("afterExpand", function (e) {
				setTimeout(function () {
					toastr.warning("After expand event fired!");
				}, 2e3);
			}),
			e.on("beforeRemove", function (e) {
				return (
					toastr.info("Before remove event fired!"),
					confirm("Are you sure to remove this card ?")
				);
			}),
			e.on("afterRemove", function (e) {
				setTimeout(function () {
					toastr.warning("After remove event fired!");
				}, 2e3);
			}),
			e.on("reload", function (e) {
				toastr.info("Leload event fired!"),
					KTApp.block(e.getSelf(), {
						overlayColor: "#ffffff",
						type: "loader",
						state: "primary",
						opacity: 0.3,
						size: "lg",
					}),
					setTimeout(function () {
						KTApp.unblock(e.getSelf());
					}, 2e3);
			}),
			(function () {
				var e = new KTCard("kt_card_2");
				e.on("beforeCollapse", function (e) {
					setTimeout(function () {
						toastr.info("Before collapse event fired!");
					}, 100);
				}),
					e.on("afterCollapse", function (e) {
						setTimeout(function () {
							toastr.warning("Before collapse event fired!");
						}, 2e3);
					}),
					e.on("beforeExpand", function (e) {
						setTimeout(function () {
							toastr.info("Before expand event fired!");
						}, 100);
					}),
					e.on("afterExpand", function (e) {
						setTimeout(function () {
							toastr.warning("After expand event fired!");
						}, 2e3);
					}),
					e.on("beforeRemove", function (e) {
						return (
							toastr.info("Before remove event fired!"),
							confirm("Are you sure to remove this card ?")
						);
					}),
					e.on("afterRemove", function (e) {
						setTimeout(function () {
							toastr.warning("After remove event fired!");
						}, 2e3);
					}),
					e.on("reload", function (e) {
						toastr.info("Leload event fired!"),
							KTApp.block(e.getSelf(), {
								overlayColor: "#000000",
								type: "spinner",
								state: "primary",
								opacity: 0.05,
								size: "lg",
							}),
							setTimeout(function () {
								KTApp.unblock(e.getSelf());
							}, 2e3);
					});
			})(),
			(function () {
				var e = new KTCard("kt_card_3");
				e.on("beforeCollapse", function (e) {
					setTimeout(function () {
						toastr.info("Before collapse event fired!");
					}, 100);
				}),
					e.on("afterCollapse", function (e) {
						setTimeout(function () {
							toastr.warning("Before collapse event fired!");
						}, 2e3);
					}),
					e.on("beforeExpand", function (e) {
						setTimeout(function () {
							toastr.info("Before expand event fired!");
						}, 100);
					}),
					e.on("afterExpand", function (e) {
						setTimeout(function () {
							toastr.warning("After expand event fired!");
						}, 2e3);
					}),
					e.on("beforeRemove", function (e) {
						return (
							toastr.info("Before remove event fired!"),
							confirm("Are you sure to remove this card ?")
						);
					}),
					e.on("afterRemove", function (e) {
						setTimeout(function () {
							toastr.warning("After remove event fired!");
						}, 2e3);
					}),
					e.on("reload", function (e) {
						toastr.info("Leload event fired!"),
							KTApp.block(e.getSelf(), {
								type: "loader",
								state: "success",
								message: "Please wait...",
							}),
							setTimeout(function () {
								KTApp.unblock(e.getSelf());
							}, 2e3);
					});
			})(),
			(function () {
				var e = new KTCard("kt_card_4");
				e.on("beforeCollapse", function (e) {
					setTimeout(function () {
						toastr.info("Before collapse event fired!");
					}, 100);
				}),
					e.on("afterCollapse", function (e) {
						setTimeout(function () {
							toastr.warning("Before collapse event fired!");
						}, 2e3);
					}),
					e.on("beforeExpand", function (e) {
						setTimeout(function () {
							toastr.info("Before expand event fired!");
						}, 100);
					}),
					e.on("afterExpand", function (e) {
						setTimeout(function () {
							toastr.warning("After expand event fired!");
						}, 2e3);
					}),
					e.on("beforeRemove", function (e) {
						return (
							toastr.info("Before remove event fired!"),
							confirm("Are you sure to remove this card ?")
						);
					}),
					e.on("afterRemove", function (e) {
						setTimeout(function () {
							toastr.warning("After remove event fired!");
						}, 2e3);
					}),
					e.on("reload", function (e) {
						toastr.info("Leload event fired!"),
							KTApp.block(e.getSelf(), {
								type: "loader",
								state: "primary",
								message: "Please wait...",
							}),
							setTimeout(function () {
								KTApp.unblock(e.getSelf());
							}, 2e3);
					});
			})();
	},
};
jQuery(document).ready(function () {
	KTCardTools.init();
});
