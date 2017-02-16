
$(document).ready(function() {
    $("#welcome").modal('show');

	
	/////////////////////
	// parties validation
	/////////////////////
    $("#volgende3").click(function () {

        if (!$('input[name=party]:checked').val()) {
            alert("Selecteer a.u.b. een partij.");
            return false;
        }

        show3();
        return true;
		
    });
	

    $("#volgende1").show();
    $(".part1").show();
    $("#volgende2").hide();
    $("#verstuur").hide();
    $(".part2").hide();
    $(".part3").hide();
	$(".part4").hide();
	$("#volgende3").hide();
    $("#volgende1").click(show1);
    $("#volgende2").click(show2);
	//$("#volgende3").click(show3);
	
	
	
	///////////////////////////
	// NEWS CHANNELS VALIDATION
	///////////////////////////
	$("#verstuur").click(function () {

        // if none news channel is selected
        if ($("input.newschannels:checked").length <= 0) {
            alert("Beantwoord a.u.b. vraag 8.");
            return false;

        }

        // everything ok
        return true;
    });
	
	
	// BUTTON CLOSE COOKIE INFO
    $("#cookiesluiten").click(function () {

        $('.cookie-melding').fadeOut();

    });
	
/*
    $("#welkomsluiten").click(function() {

        $('.welcome').fadeOut();
        $('#bginformationform').fadeIn();

    });
*/
});


function show1() {
  $(".part1").hide();
  $("#volgende1").hide();
  $(".part2").show();
  $("#volgende2").show();
}

function show2() {
  $(".part2").hide();
  $("#volgende2").hide();
  $(".part3").show();
  $("#volgende3").show();
}

function show3() {
	$("#volgende3").hide();
  $(".part3").hide();

  $(".part4").show();

    $("#verstuur").show();
}




