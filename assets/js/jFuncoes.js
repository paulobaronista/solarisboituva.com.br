$(document).on('ready', function () {
	$(".glr-home").slick({
		arrows: false,
		dots: false,
		infinite: true,
		speed: 500,
		autoplay: true,
		autoplaySpeed: 4000,
	});

	$('.galeria-perpectivas').slick({
		draggable: false,
		arrows: true,
		dots: false,
		infinite: true,
	});

	
	$('.galeria-local').slick({
		draggable: false,
		arrows: true,
		dots: false,
		infinite: true,
	});
});

$(document).ready(function () {
	$("#close").click(function () {
		$("#aviso").hide();
		window.location.href = "https://www.solarisresidencial.com.br/"
	});
});

$(document).ready(function () {
	$('#cookies').show();
	if (window.localStorage.getItem('accept_cookies')) {
		$('#cookies').hide();
		return false;
	}
	$(".btn_cookie").click(function () {
		window.localStorage.setItem('accept_cookies', true);
		$('#cookies').hide();
		return false;
	});
});

// Script Scroll OnPage
$(document).ready(function () {
	$(document).on("scroll", onScroll);
	$('.scrollink').on('click', function (e) {
		e.preventDefault();
		$(document).off("scroll");
		$('.scrollink').each(function () {
			$(this).removeClass('active');
		})
		$(this).addClass('active');
		var target = this.hash,
			$target = $(target);
		$('html, body').stop().animate({ scrollTop: $target.offset().top - 69 }, 500, 'swing', function () {
			// window.location.hash = target;
			$(document).on("scroll", onScroll);
		});
	});
});

function onScroll(event) {
	var scrollPos = $(document).scrollTop();
	$('#menuCenter .scrollink').each(function () {
		var currLink = $(this);
		var refElement = $(currLink.attr("href"));
		if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
			$('#menuCenter ul li .scrollink').removeClass("active");
			currLink.addClass("active");
		} else {
			currLink.removeClass("active");
		}
	});
}

$(document).on('ready', function () {
	$('.navbar-collapse a').click(function () {
		$(".navbar-collapse").collapse('hide');
	});
});

function recaptcha_callback(){
    $('.btn_enviar').prop("disabled", false);
}

$(function () {
	$('.nome').clear();
	$('.email').clear();
	$('.phone').clear();
	$('.msg').clear();

	$('.btn_enviar').on('click', function () {
		var n, e, t, m;
		var msg = "";
		n = $('.nome').val();
		e = $('.email').val();
		t = $('.phone').val();
		m = $('.msg').val();
	});

	$('.phone').inputmask({ "mask": "(99) 999999999" });
});
