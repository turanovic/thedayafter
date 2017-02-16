<?php
if(!isset($_COOKIE["visitor"])) {
    header("location:../../newuser.php");
}
?>
<!DOCTYPE HTML>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <title>The Final Day</title>
        <link rel="icon" href="assets/img/favicon.png">
        <link rel="stylesheet" href="resources/css/style.css">
        <script src="assets/scripts/jquery.js"></script>
        <script src="assets/scripts/bootstrap.js"></script>
        <script src="resources/js/script.js"></script>
        <script src="resources/js/weekly.js"></script>
    </head>
    <body>
        <?php include "resources/php/banner.php"; ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-10 col-sm-12 mainForm">



                    <h1>Wekelijkse enquête</h1>
                    <form method="post" name="weekly_form" action="resources/php/form_validate.php">
                        <input type="hidden" name="stage" value="3">

                        <p>
                            Welk nieuwsbericht / uitspraak / toespraak (speech) van kanditaten/partijen pakte jouw aandacht afgelopen week? Geef a.u.b. minimaal één artikel of nieuwsbericht op. Je kunt er maximaal drie invoeren. Je kunt het artikel/nieuwsbericht kopiëren/plakken of zelf schrijven in de boxen hieronder. Geef a.u.b. ook aan waar u hetgene heeft gehoord/gezien.
                        </p>
                        <p>
                            Deze vragen zullen wekelijks aan u gevraagt worden met als doel het stem gedrag van u (anoniem) te volgen en waarom het eventueel zou veranderen.
                        </p>
                        <div class="part1">
                            <!-- Vraag 1 -->
                            <h3>Op welke partij zou jij stemmen?</h3>

                            <p>
                                <i>Je bent verplicht om minimaal 1 artikel op te geven. De volgende 2 artikels zijn optioneel.</i>
                            </p>

                            <select name="party">
                                <option value="1" selected>50 Plus (Henk Krol)</option>
                                <option value="2">CDA (Sybrand Buma)</option>
                                <option value="3">D66 (Alexander Pechtold)</option>
                                <option value="4">GroenLinks (Jesse Klaver)</option>
                                <option value="5">PvdA (Lodewijk Asscher)</option>
                                <option value="6">PVV (Geert Wilders)</option>
                                <option value="7">VVD (Mark Rutte)</option>
                                <option value="8">SP (Emiel Roemer)</option>
                                <option value="9">Weet ik niet / Ik ga niet stemmen</option>
                            </select>

                            <!-- Vraag 2 -->
                            <h3>Artikel 1</h3>
                            <input type="radio" name="article_1" value="1">
                            <label>TV Kanaal</label><br>

                            <input type="radio" name="article_1" value="2">
                            <label>Social Media</label><br>

                            <input type="radio" name="article_1" value="3">
                            <label>Krant</label><br>

                            <input type="radio" name="article_1" value="4">
                            <label>Toespraak</label><br>

                            <input type="radio" name="article_1" value="5">
                            <label>Debat</label><br>

                            <input type="radio" name="article_1" value="6">
                            <label>Anders..</label><br><br>

                            <label>Inhoud artikel</label><br>
                            <textarea name="article_text_1" class="boxsizingBorder" id="verplichtartikeltext"></textarea><br>
                        </div>
                        <div class="part2">
                            <!-- Vraag 3 -->
                            <p>
                                <i>Dit artikel is optioneel</i>
                            </p>

                            <h3>Artikel 2</h3>
                            <input type="radio" name="article_2" value="1">
                            <label>TV Kanaal</label><br>

                            <input type="radio" name="article_2" value="2">
                            <label>Social Media</label><br>

                            <input type="radio" name="article_2" value="3">
                            <label>Krant</label><br>

                            <input type="radio" name="article_2" value="4">
                            <label>Toespraak</label><br>

                            <input type="radio" name="article_2" value="5">
                            <label>Debat</label><br>

                            <input type="radio" name="article_2" value="6">
                            <label>Anders..</label><br><br>
                            <p>
                                <input type="button" id="deleteradio2" value="Verwijder bovenstaande selectie">
                            </p>
                            <br/>
                            <label>Inhoud artikel</label><br>
                            <textarea name="article_text_2" class="boxsizingBorder" id="verplichtartikeltext2"></textarea><br>
                        </div>

                        <div class="part3">
                            <!-- Vraag 4 -->
                            <p>
                                <i>Dit artikel is optioneel</i>
                            </p>

                            <h3>Artikel 3</h3>
                            <input type="radio" name="article_3" value="1">
                            <label>TV Kanaal</label><br>

                            <input type="radio" name="article_3" value="2">
                            <label>Social Media</label><br>

                            <input type="radio" name="article_3" value="3">
                            <label>Krant</label><br>

                            <input type="radio" name="article_3" value="4">
                            <label>Toespraak</label><br>

                            <input type="radio" name="article_3" value="5">
                            <label>Debat</label><br>

                            <input type="radio" name="article_3" value="6">
                            <label>Anders..</label><br><br>
                            <p>
                                <input type="button" id="deleteradio3" value="Verwijder bovenstaande selectie">
                            </p>
                            <br/>
                            <label>Inhoud artikel</label><br>
                            <textarea name="article_text_3" class="boxsizingBorder" id="verplichtartikeltext3"></textarea><br>

                            <input type="submit" value="Versturen" class="btn btn-success btn-sm btn-block" id="verstuur">  
                        </div>	
                        <button type="button" id="volgende1" class="btn btn-primary btn-sm btn-block">Volgende</button>
                        <button type="button" id="volgende2" class="btn btn-primary btn-sm btn-block">Volgende</button>


                    </form>

                </div>	
            </div>	
        </div>	


    </body>
</html>
