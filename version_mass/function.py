#!/usr/bin/python

from Menu import*

def enregistrer_comptes(liste):
    with open ("comptes", "wb") as fichier_comptes:
         print(liste, fichier_comptes )


def Afficher_comptes():
    with open("liste", "rb") as fichier_comptes:
        liste = fichier_comptes.readlines()
    return list


