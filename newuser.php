<?php
if(isset($_COOKIE["visitor"])) {
    header("location:../../weeklyform.php");
}
?>
<!DOCTYPE HTML>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Achtergrond Informatie</title>
        <link rel="icon" href="assets/img/favicon.png">
        <link rel="stylesheet" href="resources/css/style.css">
        <script src="assets/scripts/jquery.js"></script>
        <script src="assets/scripts/bootstrap.js"></script>
        <script src="resources/js/script.js"></script>
        <script src="resources/js/background.js"></script>
    </head>
    <body>
        <?php include "resources/php/banner.php"; ?>
        <!-- COOKIE MELDING -->
        <div class="cookie-melding">
            Deze website gebruikt cookies om gegevens op de computer op te slaan.
            <input type="button" value="Sluit melding" id="cookiesluiten" class="btn btn-default"/>
        </div>

        <!-- WELCOME POP-UP -->
        <div id="welcome" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <img src="assets/img/verkiezingen.jpg" id="welkomfoto"/>
                        <h1>Welkom bij de verkiezings-enquête</h1>
                        <p>
                            Deze enquête is anoniem. We vragen je om eenmalig je achtergrondinformatie in te vullen. Vervolgens kom je op het scherm dat je wekelijks moet invoeren.
                            <br />Deze wekelijkse vragen gaan erover of je nog steeds op dezelfde partij gaat stemmen en waarom wel/niet. Meer informatie lees je op die specifieke pagina.
                        </p>
                        <p>
                            <strong>Je vult deze enquete iedere week 1 keer in.</strong>
                        </p>
                        <p>
                            Het doel van deze enquête is om het stemgedrag van de bevolking te analyseren op basis van bepaalde events, zoals nieuwsberichten, tv uitzendingen en uitspraken van politieke lijsttrekkers.
                        </p>
                        <p>
                            Wij adviseren u om Google Chrome te gebruiken voor deze website.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-sm btn-block" data-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- VRAGEN ACHTERGRONDINFORMATIE -->
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-6 col-md-10 col-sm-12 mainForm">

                    <form method="post" name="new_user" action="resources/php/form_validate.php">
                        <input type="hidden" name="stage" value="2">
                        <!-- title -->
                        <h1>Achtergrondinformatie</h1>
                        <p><i>Wij adviseren u om Google Chrome te gebruiken voor deze website.</i></p>
                        <!-- Vraag1 -->
                        <div class="part1">
                            <h3>1. Wat is je geboortedatum?</h3>
                            <input type="date" name="birthdate" value="2000-01-01">

                            <!-- Vraag 2 -->

                            <h3>2. Wat is je geslacht?</h3>
                            <select name="gender" style="margin-bottom:20px;">
                                <option value="m" selected>Man</option>
                                <option value="v">Vrouw</option>
                            </select>                
                        </div>
                        <!-- Vraag 3 -->
                        <div class="part2">           
                            <h3>3. Wat is de grootte van je huishouden?</h3>
                            <select name="household">
                                <option value="1" selected>1 Persoon</option>
                                <option value="2">2 Personen</option>
                                <option value="3">3 Personen</option>
                                <option value="4">4 Personen</option>
                                <option value="5">5 Personen</option>
                                <option value="6">6 of meer Personen</option>
                            </select>               

                            <!-- Vraag 4 -->         
                            <h3>4. Wat is je hoogst behaalde opleiding?</h3>
                            <select name="education">
                                <option value="1" selected>Geen</option>
                                <option value="2">Basisonderwijs</option>
                                <option value="3">LBO/ VBO/ VMBO (Kader/Beroepsgericht)</option>
                                <option value="4">MAVO/HAVO (Vanaf 3 jaar)/ VWO (Vanaf 3 jaar)/ VMBO (Theoretisch)</option>
                                <option value="5">MBO</option>
                                <option value="6">HAVO (Bovenbouw)/ VWO (Bovenbouw)/ WO en HBO prodeuse</option>
                                <option value="7">HBO/ WO Bachelor of Kandidaats</option>
                                <option value="8">WO Doctoraal of Master</option>
                                <option value="0">Weet ik niet/ Wil ik niet zeggen</option>
                            </select>             
                            <!-- Vraag 5 -->          
                            <h3>5. Wat is je huidige werksituatie?</h3>
                            <select name="worksituation">
                                <option selected value="7">Studerend</option>
                                <option value="1">Zelfstandig ondernemer</option>
                                <option value="2">Werkzaam in loondienst</option>
                                <option value="3">Werkzaam bij de overheid</option>
                                <option value="4">Arbeidsongeschikt</option>
                                <option value="5">Werkloos/ Werk-zoekend/ Bijstand</option>
                                <option value="6">Gepensioneerd/ VUT</option>
                                <option value="8">Huisvrouw/ Huisman</option>
                                <option value="0">Weet ik niet/ Wil ik niet zeggen</option>
                            </select>                       
                            <!-- Vraag 6 -->          
                            <h3>6. Wat is je bruto jaarinkomen van het huishouden?</h3>
                            <select name="income" style="margin-bottom:20px;">
                                <option value="1" selected>Tot &euro;12.500</option>
                                <option value="2">&euro;12.500 tot &euro;26.200</option>
                                <option value="3">&euro;26.200 tot &euro;38.800</option>
                                <option value="4">&euro;38.800 tot &euro;65.000</option>
                                <option value="5">&euro;65.000 tot &euro;77.500</option>
                                <option value="6">Groter dan &euro;77.500</option>
                                <option value="0">Weet ik niet/ Wil ik niet zeggen</option>
                            </select>         
                        </div>  
                        <!-- Vraag 7 -->
                        <div class="part3" style="margin-bottom:20px;">           
                            <h3>7. Op welke van de volgende partijen ga je stemmen op 15 maart?</h3>
                            <br>
                            <input type="radio" name="party" value="0"> <img src="assets/img/partijlogos/geen.png" alt="" style="margin-right: 10%">
                            <input type="radio" name="party" value="2"> <img src="assets/img/partijlogos/cda.png" alt="" style="margin-right: 10%">
                            <input type="radio" name="party" value="3"> <img src="assets/img/partijlogos/d66.png" alt="" style="margin-right: 10%"><br><br>
                            <input type="radio" name="party" value="5"> <img src="assets/img/partijlogos/pvda.png" alt="" style="margin-right: 10%">
                            <input type="radio" name="party" value="6"> <img src="assets/img/partijlogos/pvv.png" alt="" style="margin-right: 10%">
                            <input type="radio" name="party" value="4"> <img src="assets/img/partijlogos/groenlinks.png" alt="" style="margin-right: 10%"><br><br>
                            <input type="radio" name="party" value="1"> <img src="assets/img/partijlogos/50plus.png" alt="" style="margin-right: 10%">
                            <input type="radio" name="party" value="8"> <img src="assets/img/partijlogos/sp.png" alt="" style="margin-right: 10%">
                            <input type="radio" name="party" value="7"> <img src="assets/img/partijlogos/vvd.png"alt="" style="margin-right: 10%"> <br><br>               
                            <input type="radio" name="party" value="9"> <img src="assets/img/partijlogos/anderepartij.png"alt="" style="margin-right: 10%">

                        </div>
                        <div class="part4"> 	
                            <!-- Vraag 8 -->        
                            <h3>8. Op welke social media kanalen, magazines en tv programma's volg je het nieuws (over de verkiezingen)?</h3>
                            <i>Je kunt meerdere antwoorden selecteren per onderdeel.</i><br>

                            <div class="row">
                                <div class="col-lg-4 col-md-12">
                                    <h5>Social Media:</h5>
                                    <input type="checkbox" value="1" name="news_source[]" class="newschannels" id="facebook">
                                    <label for="facebook">Facebook</label><br>

                                    <input type="checkbox" value="2" name="news_source[]" class="newschannels">
                                    <label>Twitter</label><br>

                                    <input type="checkbox" value="3" name="news_source[]" class="newschannels">
                                    <label>Instagram</label><br>

                                    <input type="checkbox" value="4" name="news_source[]" class="newschannels">
                                    <label>LinkedIn</label><br>

                                    <input type="checkbox" value="5" name="news_source[]" class="newschannels">
                                    <label>Reddit</label><br>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <h5>Kranten:</h5>                   
                                    <input type="checkbox" value="6" name="news_source[]" class="newschannels">
                                    <label>De Telegraaf</label><br>

                                    <input type="checkbox" value="7" name="news_source[]" class="newschannels">
                                    <label>Metro</label><br>

                                    <input type="checkbox" value="8" name="news_source[]" class="newschannels">
                                    <label>Algemeen Dagblad</label><br>

                                    <input type="checkbox" value="9" name="news_source[]" class="newschannels">
                                    <label>De Volkskrant</label><br>

                                    <input type="checkbox" value="10" name="news_source[]" class="newschannels">
                                    <label>NRC Handelsblad</label><br>

                                    <input type="checkbox" value="11" name="news_source[]" class="newschannels">
                                    <label>Trouw</label><br>

                                    <input type="checkbox" value="12" name="news_source[]" class="newschannels">
                                    <label>NRC Next</label><br>

                                    <input type="checkbox" value="13" name="news_source[]" class="newschannels">
                                    <label>Financieel Dagblad</label><br>

                                    <input type="checkbox" value="14" name="news_source[]" class="newschannels">
                                    <label>Reformatorisch Dagblad</label><br>

                                    <input type="checkbox" value="15" name="news_source[]" class="newschannels">
                                    <label>De Gelderlander</label><br>

                                    <input type="checkbox" value="20" name="news_source[]" class="newschannels">
                                    <label>Brabants Dagblad</label><br>

                                    <input type="checkbox" value="23" name="news_source[]" class="newschannels">
                                    <label>Eindhovens Dagblad</label><br>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <h5>TV</h5>        
                                    <input type="checkbox" value="25" name="news_source[]" class="newschannels">
                                    <label>NOS Journaal</label><br>

                                    <input type="checkbox" value="26" name="news_source[]" class="newschannels">
                                    <label>Wereld Draait Door</label><br>

                                    <input type="checkbox" value="27" name="news_source[]" class="newschannels">
                                    <label>EenVandaag</label><br>

                                    <input type="checkbox" value="28" name="news_source[]" class="newschannels">
                                    <label>Hart van Nederland</label><br>

                                    <input type="checkbox" value="29" name="news_source[]" class="newschannels">
                                    <label>RTL Boulevard</label><br>

                                    <input type="checkbox" value="30" name="news_source[]" class="newschannels">
                                    <label>RTL Nieuws</label><br>

                                    <input type="checkbox" value="31" name="news_source[]" class="newschannels">
                                    <label>RTL Late Night</label><br>

                                    <input type="checkbox" value="32" name="news_source[]" class="newschannels">
                                    <label>Zondag met Lubach</label><br>

                                    <input type="checkbox" value="33" name="news_source[]" class="newschannels">
                                    <label>Editie NL</label><br>

                                    <input type="checkbox" value="34" name="news_source[]" class="newschannels">
                                    <label>Shownieuws</label><br>

                                    <input type="checkbox" value="35" name="news_source[]" class="newschannels">
                                    <label>Nieuwsuur</label><br>  
                                </div>
                            </div>


                            <br/><br/>


                        </div>       



                        <button type="button" id="volgende1" class="btn btn-primary btn-sm">Volgende</button>
                        <button type="button" id="volgende2" class="btn btn-primary btn-sm">Volgende</button>
                        <button type="button" id="volgende3" class="btn btn-primary btn-sm">Volgende</button>
                        <input type="submit" id="verstuur" class="btn btn-success btn-sm btn-block" value="Verstuur">
                    </form>
                </div>
            </div>
        </div>

    </body>
</html>