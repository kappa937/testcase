$(document).ready(function(){

	$('form').validate({
		highlight: function(element, errorClass) {
			$(element).add($(element).parent()).addClass("invalidElem");
		},
		unhighlight: function(element, errorClass) {
			$(element).add($(element).parent()).removeClass("invalidElem");
		},
		errorElement: "div",
		errorClass: "errorMsg"
	});

	$.validator.addClassRules({
        flowerValidation: {
            min: 0,
            max: 999999,
            required: true,
			digits: true,
        }
    });

	$('input').addClass("flowerValidation").change(function(e) {
		$('form').validate().element($(e.target));
	});

	$('#topslider').owlCarousel({
		slideSpeed: 600,
		singleItem: true,
		autoPlay:true,
		autoPlayTimeout:500,
		loop:true,
		animateOut: 'fadeOut'
	});

});