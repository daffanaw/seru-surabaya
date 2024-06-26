"use strict";
var KTLogin = (function () {
	var t,
		i = function (i) {
			var o = "login-" + i + "-on";
			i = "kt_login_" + i + "_form";
			t.removeClass("login-forgot-on"),
				t.removeClass("login-signin-on"),
				t.removeClass("login-signup-on"),
				t.addClass(o),
				KTUtil.animateClass(
					KTUtil.getById(i),
					"animate__animated animate__backInUp"
				);
		};
	return {
		init: function () {
			var o;
			(t = $("#kt_login")),
				(o = FormValidation.formValidation(
					KTUtil.getById("kt_login_signin_form"),
					{
						fields: {
							username: {
								validators: { notEmpty: { message: "Username is required" } },
							},
							password: {
								validators: { notEmpty: { message: "Password is required" } },
							},
						},
						plugins: {
							trigger: new FormValidation.plugins.Trigger(),
							submitButton: new FormValidation.plugins.SubmitButton(),
							bootstrap: new FormValidation.plugins.Bootstrap(),
						},
					}
				)),
				$("#kt_login_signin_submit").on("click", function (t) {
					t.preventDefault(),
						o.validate().then(function (t) {
							"Valid" == t
								? swal
										.fire({
											text: "All is cool! Now you submit this form",
											icon: "success",
											buttonsStyling: !1,
											confirmButtonText: "Ok, got it!",
											customClass: {
												confirmButton: "btn font-weight-bold btn-light-primary",
											},
										})
										.then(function () {
											KTUtil.scrollTop();
										})
								: swal
										.fire({
											text: "Sorry, looks like there are some errors detected, please try again.",
											icon: "error",
											buttonsStyling: !1,
											confirmButtonText: "Ok, got it!",
											customClass: {
												confirmButton: "btn font-weight-bold btn-light-primary",
											},
										})
										.then(function () {
											KTUtil.scrollTop();
										});
						});
				}),
				$("#kt_login_forgot").on("click", function (t) {
					t.preventDefault(), i("forgot");
				}),
				$("#kt_login_signup").on("click", function (t) {
					t.preventDefault(), i("signup");
				}),
				(function (t) {
					var o,
						n = KTUtil.getById("kt_login_signup_form");
					(o = FormValidation.formValidation(n, {
						fields: {
							fullname: {
								validators: { notEmpty: { message: "Username is required" } },
							},
							email: {
								validators: {
									notEmpty: { message: "Email address is required" },
									emailAddress: {
										message: "The value is not a valid email address",
									},
								},
							},
							password: {
								validators: {
									notEmpty: { message: "The password is required" },
								},
							},
							cpassword: {
								validators: {
									notEmpty: {
										message: "The password confirmation is required",
									},
									identical: {
										compare: function () {
											return n.querySelector('[name="password"]').value;
										},
										message: "The password and its confirm are not the same",
									},
								},
							},
							agree: {
								validators: {
									notEmpty: {
										message: "You must accept the terms and conditions",
									},
								},
							},
						},
						plugins: {
							trigger: new FormValidation.plugins.Trigger(),
							bootstrap: new FormValidation.plugins.Bootstrap(),
						},
					})),
						$("#kt_login_signup_submit").on("click", function (t) {
							t.preventDefault(),
								o.validate().then(function (t) {
									"Valid" == t
										? swal
												.fire({
													text: "All is cool! Now you submit this form",
													icon: "success",
													buttonsStyling: !1,
													confirmButtonText: "Ok, got it!",
													customClass: {
														confirmButton:
															"btn font-weight-bold btn-light-primary",
													},
												})
												.then(function () {
													KTUtil.scrollTop();
												})
										: swal
												.fire({
													text: "Sorry, looks like there are some errors detected, please try again.",
													icon: "error",
													buttonsStyling: !1,
													confirmButtonText: "Ok, got it!",
													customClass: {
														confirmButton:
															"btn font-weight-bold btn-light-primary",
													},
												})
												.then(function () {
													KTUtil.scrollTop();
												});
								});
						}),
						$("#kt_login_signup_cancel").on("click", function (t) {
							t.preventDefault(), i("signin");
						});
				})(),
				(function (t) {
					var o;
					(o = FormValidation.formValidation(
						KTUtil.getById("kt_login_forgot_form"),
						{
							fields: {
								email: {
									validators: {
										notEmpty: { message: "Email address is required" },
										emailAddress: {
											message: "The value is not a valid email address",
										},
									},
								},
							},
							plugins: {
								trigger: new FormValidation.plugins.Trigger(),
								bootstrap: new FormValidation.plugins.Bootstrap(),
							},
						}
					)),
						$("#kt_login_forgot_submit").on("click", function (t) {
							t.preventDefault(),
								o.validate().then(function (t) {
									"Valid" == t
										? KTUtil.scrollTop()
										: swal
												.fire({
													text: "Sorry, looks like there are some errors detected, please try again.",
													icon: "error",
													buttonsStyling: !1,
													confirmButtonText: "Ok, got it!",
													customClass: {
														confirmButton:
															"btn font-weight-bold btn-light-primary",
													},
												})
												.then(function () {
													KTUtil.scrollTop();
												});
								});
						}),
						$("#kt_login_forgot_cancel").on("click", function (t) {
							t.preventDefault(), i("signin");
						});
				})();
		},
	};
})();
jQuery(document).ready(function () {
	KTLogin.init();
});
