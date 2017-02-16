$(document).ready(function() {
 


    $("#volgende1").show();
    $(".part1").show();
    $("#volgende2").hide();
    $("#verstuur").hide();
    $(".part2").hide();
    $(".part3").hide();
    $("#volgende1").click(show1);
    $("#volgende2").click(show2);
	$("#verstuur").click(verstuur);
	
	$("#deleteradio2").click(deleteradio2);
	$("#deleteradio3").click(deleteradio3);
	
	
});


function show1() {
	
	if (!$('input[name=article_1]:checked').val()) {
		alert("Selecteer a.u.b. een nieuwsbron.");
		return false;
	}

	if ($("#verplichtartikeltext").val().length < 15) {
		alert("Typ of kopieer a.u.b. tekst in het tekstblok.");
		return false;
	}
	
	$(".part1").hide();
	$("#volgende1").hide();
	$(".part2").show();
	$("#volgende2").show();
	
}

function show2() {
	
	if ($('input[name=article_2]:checked').val() && $("#verplichtartikeltext2").val().length < 15) {
		alert("Typ of kopieer a.u.b. tekst in het tekstblok.");
		return false;
	}

	if ($("#verplichtartikeltext2").val().length > 0 && !$('input[name=article_2]:checked').val()) {
		alert("Selecteer a.u.b. een nieuwsbron");
		return false;
	}
	
	$(".part2").hide();
	$("#volgende2").hide();
	$(".part3").show();
	$("#verstuur").show();
	
}

function verstuur() {

	if ($('input[name=article_3]:checked').val() && $("#verplichtartikeltext3").val().length < 15) {
		alert("Typ of kopieer a.u.b. tekst in het tekstblok.");
		return false;
	}

	if ($("#verplichtartikeltext3").val().length > 0 && !$('input[name=article_3]:checked').val()) {
		alert("Selecteer a.u.b. een nieuwsbron");
		return false;
	}

	$(".part2").hide();
	$("#volgende2").hide();
	$(".part3").show();
	$("#verstuur").show();
  
}

function deleteradio2(){
	$('input[name=article_2]').prop('checked', false);
}

function deleteradio3(){
	$('input[name=article_3]').prop('checked', false);
}



