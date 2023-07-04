# this program searches for all $lang strings in all files in the quellordner recursively
# it replaces all found strings in the quellordner into the according files in the zielordner
# it adds the english string as a comment behind the newly merged line

import os
import shutil


def kopiere_uebersetzungen(quellordner, zielordner):
    umbenennen_ordner(quellordner, zielordner)
    kopiere_uebersetzungen_in_ordnern(quellordner, zielordner)


def umbenennen_ordner(quellordner, zielordner):
    for ordnername, _, _ in os.walk(zielordner):
        if ordnername.endswith("en_us"):
            neuer_ordnername = ordnername[:-5] + "de_de"
            os.rename(ordnername, neuer_ordnername)


def kopiere_uebersetzungen_in_ordnern(quellordner, zielordner):
    for ordnername, _, dateien in os.walk(quellordner):
        for datei in dateien:
            if datei.endswith(".php"):
                quellpfad = os.path.join(ordnername, datei)
                zielordnername = ordnername.replace(quellordner, zielordner)
                zieldatei = os.path.join(zielordnername, datei)
                kopiere_uebersetzungen_in_datei(quellpfad, zieldatei)


def kopiere_uebersetzungen_in_datei(quelldatei, zieldatei):
    with open(quelldatei, "r") as quelle:
        uebersetzungen = quelle.readlines()

    with open(zieldatei, "r+") as ziel:
        zielinhalt = ziel.readlines()
        ziel.seek(0)

        for uebersetzung in uebersetzungen:
            if uebersetzung.startswith("$lang"):
                uebersetzungsteil = uebersetzung.split(" = ")
                englischer_string = uebersetzungsteil[0].strip()
                deutscher_string = uebersetzungsteil[1].strip().strip(";").strip('"')

                for index, zeile in enumerate(zielinhalt):
                    if englischer_string in zeile:
                        zielinhalt[index] = zeile.replace(
                            englischer_string, deutscher_string
                        )
                        zielinhalt[index] += f" //en: {englischer_string};\n"
                        break

        ziel.writelines(zielinhalt)
        ziel.truncate()


# Beispielaufruf
kopiere_uebersetzungen(
    "de_de-7.7.7/public_html/plugins/auto_cancel/language",  # von
    "deutsch_neu/public_html/plugins/auto_cancel/language",  # nach
)
