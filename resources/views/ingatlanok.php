<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content=<?php $token = csrf_token();
                                    echo $token; ?>>
    <link rel="stylesheet" href="css/stilus.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/Ajax.js"></script>
    <script src="js/Ingatlan.js"></script>
    <script src="js/script.js"></script>
    <title>Li Richárd</title>
</head>

<body>
    <main>
    <input type="text" name="keres" id="keres" placeholder="Keress itt!">
        <header>
            <h1>Ajánlataink</h1>
        </header>
        <article>
            <div id="ingatlanok">
            </div>
        </article>
        <section>

            <form action="" id="uj-hirdetes">

                <div>
                    <h2>Új hirdetés</h2>
                </div>
                <div>
                    <label for="kategoria">Ingatlan kategoria</label><br>
                    <select class="kategoria-valaszto"></select><br><br>
                </div>
                <div>
                    <input name="hirdetes_datuma" type="date" class="hirdetes-datuma"><br><br>
                </div>
                <div>
                    <label for="leiras">Ingatlan leírása:</label><br>

                    <textarea class="leiras" name="leiras" rows="4" cols="50">

                    </textarea>
                </div>
                <div>
                    <label for="tehermentes">Tehermentes ingatlan</label>
                    <input type="checkbox" name="tehermentes" class="tehermentes"><br><br>
                </div>
                <div>
                    <label for="fenykep">Fénykép az ingatlanról</label><br>
                    <input type="text" name="fenykep" class="fenykep"><br><br>
                </div>
                <div>
                    <input type="button" value="Küld" id="kuld">
                </div>
            </form>

            <form action="" id="modosito-urlap">
                <div>
                    <h2>Módosítás</h2>
                </div>
                <div>
                    <label for="kategoria">Ingatlan kategoria</label><br>
                    <select class="kategoria-valaszto"></select><br><br>
                </div>
                <div>
                    <label for="hirdetes_datuma">Hirdetés dátuma</label><br>
                    <input name="hirdetes_datuma" type="date" class="hirdetes-datuma"><br><br>
                </div>
                <div>
                    <label for="leiras">Ingatlan leírása:</label><br>
                    <textarea class="leiras" name="leiras" rows="4" cols="50">
                        </textarea>
                </div>
                <div>
                    <label for="tehermentes">Tehermentes ingatlan</label>
                    <input type="checkbox" name="tehermentes" class="tehermentes"><br><br>
                    <label for="hirdetes_datuma">Hirdetés dátuma</label><br>
                </div>
                <div>
                    <label for="fenykep">Fénykép az ingatlanról</label><br>
                    <input type="text" name="fenykep" class="fenykep"><br><br>
                </div>
                <div>
                    <input type="button" value="Módosít" id="modosit">
                    <input type="button" value="Mégse" id="megse">
                </div>
            </form>

        </section>
    </main>
</body>

</html>