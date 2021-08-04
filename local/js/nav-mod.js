window.addEventListener("load", function() {
	require(['jquery'], function($) {
		if (!RegExp('/course/').test(window.location.href)) {
			// not a course page
			return;
		}
		if ($('#nav-drawer li a[data-key="participants"]').length) {
			// not a student
			return;
		}

		if (!$('#nav-drawer').hasClass('closed')) {
			$('button[data-action="toggle-drawer"]').click();
		}

		$('nav.navbar').hide();
		$('#page').css('margin-top', '0px');

		$('#page-footer').hide();

		$('.breadcrumb-item').each(function() {
			var item = $(this);
			var item_text = item.text();
			var first_visible = null;

			if (item_text.match(/dashboard/i)
			 || item_text.match(/my courses/i)
			) {
				item.hide();
			}
		});

	});
});
