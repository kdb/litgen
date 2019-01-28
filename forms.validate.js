function validateForm(form) {

    if (form == "bog") {
        if (
            er_tom(form_bog.efternavn, "Du skal udfylde 'Efternavn'") &&
            er_tom(form_bog.titel, "Du skal udfylde 'Titel'") &&
            er_tom(form_bog.udgave, "Du skal udfylde 'Udgave'") &&
            er_tom(form_bog.forlag, "Du skal udfylde 'Forlag'") &&
            er_tom(form_bog.udgivelse, "Du skal udfylde 'Udgivelsesår'") &&
            er_tal(form_bog.udgave, 'Du skal skrive et tal.') &&
            er_tal(form_bog.udgivelse, 'Du skal skrive et årstal.')
        ) {
            if (form_bog.url.value != "") {
                if (
                    er_tom(form_bog.dato_d, "Du skal udfylde 'Besøgt d. (dd)'") &&
                    er_tom(form_bog.dato_m, "Du skal udfylde 'Besøgt d. (mm)'") &&
                    er_tom(form_bog.dato_y, "Du skal udfylde 'Besøgt d. (åååå)'")
                ) {
                    return true;
                } else {
                    return false;
                }
            }

            if (form_bog.side_fra.value != "") {
                if (er_tom(form_bog.side_til, "Du skal også udfylde 'til side'"))
                    return true;
                else
                    return false;
            }

            if (form_bog.side_til.value != "") {
                if (er_tom(form_bog.side_fra, "Du skal også udfylde 'Fra side'"))
                    return true;
                else
                    return false;
            }
        } else {
            return false;
        }
    }

    if (form == "afsnit") {
        if (
            er_tom(form_afsnit.fornavn, "Du skal udfylde 'Fornavn'") &&
            er_tom(form_afsnit.efternavn, "Du skal udfylde 'Efternavn'") &&
            er_tom(form_afsnit.titel_bog, "Du skal udfylde 'Titel på bog'") &&
            er_tom(form_afsnit.titel_afsnit, "Du skal udfylde 'Titel på afsnit'") &&
            er_tom(form_afsnit.udgave, "Du skal udfylde 'Udgave'") &&
            er_tom(form_afsnit.forlag, "Du skal udfylde 'Forlag'") &&
            er_tom(form_afsnit.udgivelse, "Du skal udfylde 'Udgivelsesår'") &&
            er_tom(form_afsnit.side_fra, "Du skal udfylde 'Fra side'") &&
            er_tom(form_afsnit.side_til, "Du skal udfylde 'til side'")
        ) {
            if (form_afsnit.url.value != "") {
                if (
                    er_tom(form_afsnit.dato_d, "Du skal udfylde 'Besøgt d. (dd)'") &&
                    er_tom(form_afsnit.dato_m, "Du skal udfylde 'Besøgt d. (mm)'") &&
                    er_tom(form_afsnit.dato_y, "Du skal udfylde 'Besøgt d. (åååå)'")
                ) {
                    return true;
                } else {
                    return false;
                }
            }
        } else {
            return false;
        }
    }

    if (form == "artikel") {
        if (
            er_tom(form_artikel.fornavn, "Du skal udfylde 'Fornavn'") &&
            er_tom(form_artikel.efternavn, "Du skal udfylde 'Efternavn'") &&
            er_tom(form_artikel.titel, "Du skal udfylde 'Artiklens titel'") &&
            er_tom(form_artikel.kilde, "Du skal udfylde 'Kildens navn'") &&
            er_tom(form_artikel.udgivelse_y, "Du skal udfylde 'Årgang'") &&
            er_tom(form_artikel.side_fra, "Du skal udfylde 'Fra side'")
        ) {
            if (form_artikel.url.value != "") {
                if (
                    er_tom(form_artikel.dato_d, "Du skal udfylde 'Besøgt d. (dd)'") &&
                    er_tom(form_artikel.dato_m, "Du skal udfylde 'Besøgt d. (mm)'") &&
                    er_tom(form_artikel.dato_y, "Du skal udfylde 'Besøgt d. (åååå)'")
                ) {
                    return true;
                } else {
                    return false;
                }
            }
        } else {
            return false;
        }
    }

    if (form == "billede_bog") {
        if (
            er_tom(form_billede_bog.titel, "Du skal udfylde 'Billedets/Værkets titel'") &&
            er_tom(form_billede_bog.fornavn, "Du skal udfylde 'Kunstnerens fornavn'") &&
            er_tom(form_billede_bog.efternavn, "Du skal udfylde 'Kunstnerens efternavn'") &&
            er_tom(form_billede_bog.bogtitel, "Du skal udfylde 'Bogens titel'") &&
            er_tom(form_billede_bog.forlag, "Du skal udfylde 'Forlag'") &&
            er_tom(form_billede_bog.udgivelse, "Du skal udfylde 'Udgivelsesår'") &&
            er_tom(form_billede_bog.side_fra, "Du skal udfylde 'Fra side'")
        ) {
            return true;
        } else {
            return false;
        }
    }

    if (form == "billede_museum") {
        if (
            er_tom(form_billede_museum.titel, "Du skal udfylde 'Billedets/Værkets titel'") &&
            er_tom(form_billede_museum.fornavn, "Du skal udfylde 'Fornavn'") &&
            er_tom(form_billede_museum.efternavn, "Du skal udfylde 'Efternavn'") &&
            er_tom(form_billede_museum.museum, "Du skal udfylde 'Sted/Museum'")
        ) {
            return true;
        } else {
            return false;
        }
    }

    if (form == "billede_nettet") {
        if (
            er_tom(form_billede_nettet.titel, "Du skal udfylde 'Billedets/Værkets titel'") &&
            er_tom(form_billede_nettet.fornavn, "Du skal udfylde 'Fornavn'") &&
            er_tom(form_billede_nettet.efternavn, "Du skal udfylde 'Efternavn'") &&
            er_tom(form_billede_nettet.url, "Du skal udfylde 'Internetadresse (URL)'") &&
            er_tom(form_billede_nettet.dato_d, "Du skal udfylde 'Besøgt d. (dd)'") &&
            er_tom(form_billede_nettet.dato_m, "Du skal udfylde 'Besøgt d. (mm)'") &&
            er_tom(form_billede_nettet.dato_y, "Du skal udfylde 'Besøgt d. (åååå)'")
        ) {
            return true;
        } else {
            return false;
        }
    }

    if (form == "musik") {
        if (
            er_tom(form_musik.titel, "Du skal udfylde 'Titel på CD'") &&
            er_tom(form_musik.kunstner, "Du skal udfylde 'Kunstner/Bandnavn'")
        ) {
            if (form_musik.url.value != "") {
                if (
                    er_tom(form_musik.dato_d, "Du skal udfylde 'Besøgt d. (dd)'") &&
                    er_tom(form_musik.dato_m, "Du skal udfylde 'Besøgt d. (mm)'") &&
                    er_tom(form_musik.dato_y, "Du skal udfylde 'Besøgt d. (åååå)'")
                ) {
                    return true;
                } else {
                    return false;
                }
            }
        } else {
            return false;
        }
    }

    if (form == "film") {
        if (
            er_tom(form_film.titel, "Du skal udfylde 'Filmens titel'") &&
            er_tom(form_film.instruktor, "Du skal udfylde 'Instruktør'")
        ) {
            if (form_film.url.value != "") {
                if (
                    er_tom(form_film.dato_d, "Du skal udfylde 'Besøgt d. (dd)'") &&
                    er_tom(form_film.dato_m, "Du skal udfylde 'Besøgt d. (mm)'") &&
                    er_tom(form_film.dato_y, "Du skal udfylde 'Besøgt d. (åååå)'")
                ) {
                    return true;
                } else {
                    return false;
                }
            }
        } else {
            return false;
        }
    }

    if (form == "tv") {
        if (
            er_tom(form_tv.titel, "Du skal udfylde 'titel'") &&
            er_tom(form_tv.len, "Du skal udfylde 'Udsendelseslængde i min'") &&
            er_tom(form_tv.tvStation, "Du skal udfylde 'TV-station'") &&
            er_tom(form_tv.sendt_d, "Du skal udfylde 'Dato for sendt (dd)'") &&
            er_tom(form_tv.sendt_m, "Du skal udfylde 'Dato for sendt (mm)'") &&
            er_tom(form_tv.sendt_y, "Du skal udfylde 'Dato for sendt (åååå)'")
        ) {
            return true;
        } else {
            return false;
        }
    }

    if (form == "youtube") {
        if (
            er_tom(form_youtube.youtuber, "Du skal udfylde 'Youtuber'") &&
            er_tom(form_youtube.titel, "Du skal udfylde 'Titel'") &&
            er_tom(form_youtube.posted_d, "Du skal udfylde 'Dato for udgivelse (dd)'") &&
            er_tom(form_youtube.posted_m, "Du skal udfylde 'Dato for udgivelse (mm)'") &&
            er_tom(form_youtube.posted_y, "Du skal udfylde 'Dato for udgivelse (åååå)'") &&
            er_tom(form_youtube.url, "Du skal udfylde 'URL'") &&
            er_tom(form_youtube.visit_d, "Du skal udfylde 'Besøgt d. (dd)'") &&
            er_tom(form_youtube.visit_m, "Du skal udfylde 'Besøgt d. (mm)'") &&
            er_tom(form_youtube.visit_y, "Du skal udfylde 'Besøgt d. (åååå)'")
        ) {
            return true;
        } else {
            return false;
        }
    }

    if (form == "podcast") {
        if (
            er_tom(form_podcast.fornavn, "Du skal udfylde 'Fornavn'") &&
            er_tom(form_podcast.efternavn, "Du skal udfylde 'Efternavn'") &&
            er_tom(form_podcast.titel, "Du skal udfylde 'Titel'") &&
            er_tom(form_podcast.url, "Du skal udfylde 'URL'") &&
            er_tom(form_podcast.visit_d, "Du skal udfylde 'Besøgt d. (dd)'") &&
            er_tom(form_podcast.visit_m, "Du skal udfylde 'Besøgt d. (mm)'") &&
            er_tom(form_podcast.visit_y, "Du skal udfylde 'Besøgt d. (åååå)'")
        ) {
            return true;
        } else {
            return false;
        }
    }

    if (form == "blog") {
        if (
            er_tom(form_blog.fornavn, "Du skal udfylde 'Forfatterens fornavn'") &&
            er_tom(form_blog.efternavn, "Du skal udfylde 'Forfatterens efternavn'") &&
            er_tom(form_blog.titel, "Du skal udfylde 'Titel på indlæg'") &&
            er_tom(form_blog.blogtitel, "Du skal udfylde 'Titel på blog'") &&
            er_tom(form_blog.posted_d, "Du skal udfylde 'Dato for indlæg (dd)'") &&
            er_tom(form_blog.posted_m, "Du skal udfylde 'Dato for indlæg (mm)'") &&
            er_tom(form_blog.posted_y, "Du skal udfylde 'Dato for indlæg (åååå)'") &&
            er_tom(form_blog.url, "Du skal udfylde 'URL'") &&
            er_tom(form_blog.visit_d, "Du skal udfylde 'Besøgt d. (dd)'") &&
            er_tom(form_blog.visit_m, "Du skal udfylde 'Besøgt d. (mm)'") &&
            er_tom(form_blog.visit_y, "Du skal udfylde 'Besøgt d. (åååå)'")
        ) {
            return true;
        } else {
            return false;
        }
    }

    if (form == "internet") {
        if (
            er_tom(form_internet.titel, "Du skal udfylde 'Sidens titel'") &&
            er_tom(form_internet.udgiver, "Du skal udfylde 'Udgiver'") &&
            er_tom(form_internet.url, "Du skal udfylde 'Internetadresse (URL)'") &&
            er_tom(form_internet.dato_d, "Du skal udfylde 'Besøgt d. (dd)'") &&
            er_tom(form_internet.dato_m, "Du skal udfylde 'Besøgt d. (mm)'") &&
            er_tom(form_internet.dato_y, "Du skal udfylde 'Besøgt d. (åååå)'")
        ) {
            return true;
        } else {
            return false;
        }
    }

    if (form == "andet") {
        if (
            er_tom(form_andet.ansvarlig, "Du skal udfylde 'Ansvarlig'") &&
            er_tom(form_andet.type, "Du skal udfylde 'Kilde-type'") &&
            er_tom(form_andet.dato_d, "Du skal udfylde 'Dato (dd)'") &&
            er_tom(form_andet.dato_m, "Du skal udfylde 'Dato (mm)'") &&
            er_tom(form_andet.dato_y, "Du skal udfylde 'Dato (åååå)'")
        ) {
            return true;
        } else {
            return false;
        }
    }

    if (form == "kommentar") {
        if (
            er_tom(form_kommentar.afsender, "Du skal skrive dit navn") &&
            er_tom(form_kommentar.email, "Du skal skrive din E-mail adresse") &&
            er_tom(form_kommentar.kommentar, "Du skal skrive en kommentar")
        ) {
            return true;
        } else {
            return false;
        }
    }
}