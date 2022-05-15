$(function () {
    const token = $('meta[name="csrf-token"]').attr("content");
    const ajax = new Ajax(token);
    ajax.getAjax("/kategoriak", kategoriaKiir)
    ajax.getAjax("/ingatlanok", tablazatKiir)
    function kategoriaKiir(tomb) {
        $(".kategoria-valaszto").empty()
        $(".kategoria-valaszto").append("<option disable selected>Válassz egy kategoriát</option>")
        tomb.forEach(element => {
            $(".kategoria-valaszto").append("<option id=" + element.id + ">" + element.nev + "</option>")
        });
    }
    function tablazatKiir(tomb) {
        console.log(tomb)
        $("#ingatlanok").empty()
        //  $("#ingatlanok").append("<thead><th>Kategoria</th><th>Leírás</th><th>Hirdetés dátuma</th><th>Tehermentes</th><th>Fénykép</th></thead>")
        // $("#ingatlanok").append("<tbody></tbody>")
        $("#ingatlanok").append("<div class='sor tablehead'><div>Kategoria</div><div>Leírás</div><div>Hirdetés dátuma</div><div>Tehermentes</div><div>Fénykép</div></div>")

        for (let index = 0; index < tomb.length; index++) {
            const element = tomb[index];
            const elem = $("<div class='sor '></div>").appendTo("#ingatlanok")
            new Ingatlan(elem, element)
        }
    }

    $(window).on("Erdekel", (esemeny) => {
        alert(esemeny.detail.kategoria.nev+" "+esemeny.detail.leiras)
    })
    //Törlés Módosítás
    $(window).on("Torles", (esemeny) => {
        ajax.deleteAjax("/ingatlanok", esemeny.detail.id)
    })

    $(window).on("Modositas", (esemeny) => {
        // $("#modosito-urlap .kategoria-valaszto option[id='" + esemeny.detail.kategoria + "']").attr("selected", "selected");
        $("#modosito-urlap .hirdetes-datuma").val(esemeny.detail.hirdetesDatuma)
        $("#modosito-urlap .leiras").val(esemeny.detail.leiras)
        if (esemeny.detail.tehermentes == 1) {
            $("#modosito-urlap .tehermentes").prop('checked', true)
        } else {
            $("#modosito-urlap .tehermentes").prop('checked', false)
        }
        $("#modosito-urlap .fenykep").val(esemeny.detail.kepUrl)
        $("#modosito-urlap").css("display", "block")
        $("#modosit").on("click", function () {
            const adat = {
                kategoria: $("#modosito-urlap .kategoria-valaszto").children(':selected').attr('id'),
                hirdetesDatuma: $("#modosito-urlap .hirdetes-datuma").val(),
                leiras: $("#modosito-urlap .leiras").val(),
                tehermentes: $("#modosito-urlap .tehermentes").is(':checked') ? "1" : "0",
                kepUrl: $("#modosito-urlap .fenykep").val()
            }
            ajax.putAjax("/ingatlanok", adat, esemeny.detail.id)
            $("#modosito-urlap").css("display", "none")
        })
        $("#megse").on("click", function () {
            $("#modosito-urlap").css("display", "none")
        })
    })
    $("#kuld").on("click", function () {
        const adat = {
            kategoria: $("#uj-hirdetes .kategoria-valaszto").children(':selected').attr('id'),
            hirdetesDatuma: $("#uj-hirdetes .hirdetes-datuma").val(),
            leiras: $("#uj-hirdetes .leiras").val(),
            tehermentes: $("#uj-hirdetes .tehermentes").is(':checked') ? "1" : "0",
            kepUrl: $("#uj-hirdetes .fenykep").val()
        }
        console.log(adat)
        ajax.postAjax("/ingatlanok", adat)
    })
})