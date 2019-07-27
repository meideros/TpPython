import os
import pickle
from datetime import *

from bank_acount import acount


def init_file_or_get_acount_list(file_name):
    if not os.path.exists(file_name):
        with open(file_name, "wb") as file:
            pickle.dump(acount.acount_list, file)
    else:
        with open(file_name, "rb") as file:
            acount.acount_list = pickle.load(file)
        return acount.acount_list


def adding_acount(the_file_is_empty):
    print("Création de votre nouveau compte".center(100))
    info_is_value = False
    while not info_is_value:
        first_name = input("Entrez votre nom : ")
        last_name = input("Entrez votre prénom : ")
        try:
            first_name = str(first_name)
            last_name = str(last_name)
            assert first_name.isdigit() == False and last_name.isdigit() == False
            info_is_value = True
        except AssertionError:
            print("Nom ou prénom invalide ! Merci de reprendre")
    new_acount = acount(first_name, last_name)
    print("Compte créé avec succès! Votre numéro de compte est {} \n Merci de ne pas l'oublier, celui ci vous  "
          "permettra de faire ,\n une quelconque opération sur votre compte".format(
        new_acount.acount_number))
    if not the_file_is_empty:
        with open("bank_list", "rb") as file:
            acount.acount_list = pickle.load(file)
        acount.acount_list.append(new_acount)
    else:
        acount.acount_list.append(new_acount)
    with open("bank_list", "wb") as file:
        pickle.dump(acount.acount_list, file)


def show_menu_and_get_user_choice():
    print("___________________________________________ \n"
          "|1. Ajout d’un compte bancaire             |\n"
          "|2. Faire un dépôt                         |\n"
          "|3. Faire un retrait                       |\n"
          "|4. Rechercher les transactions d’un compte|\n"
          "|5. Désactiver un compte                   |\n"
          "|6. Afficher un compte bancaire            |\n"
          "|7. Lister les comptes désactivés          |\n"
          "|8. Lister tous les comptes bancaires      |\n"
          "|9. Quitter                                |\n"
          "|__________________________________________|\n")
    valide = False
    while not valide:
        choice = input("Faite votre choix : ")
        try:
            choice = int(choice)
            assert choice in range(1, 10)
            valide = True
        except ValueError:
            print("Mauvais choix (NB : Nombre entier attendu) ")
        except AssertionError:
            print("Mauvais choix (NB : Nombre compris entre 1 & 9 attendu) ")

    return choice


def add_money_in_user_acount(file_name):
    with open(file_name, 'rb') as file:
        acount.acount_list = pickle.load(file)
    acount_number_is_correct = False

    while not acount_number_is_correct:
        user_acount_number = input("Entrez votre numéro de compte : ")
        try:
            user_acount_number = str(user_acount_number)
            assert user_acount_number.isdigit() is True
            acount_number_is_correct = True
        except AssertionError:
            print("Numéro de compte invalide! Merci de reprendre la saisie")
    acount_is_find = False
    for user_acount in acount.acount_list:
        if user_acount.acount_number == int(user_acount_number):
            index = acount.acount_list.index(user_acount)
            acount_is_find = True
            break

    if not acount_is_find:
        print("Numéro de compte  incorrect ou compte inexistant merci de créer un compte")
    else:
        print("Compte n° : {} \n Nom : {} \n Prénom : {} \n Statut : {} \n  Solde : {} ".center(100).format(
            acount.acount_list[index].acount_number, acount.acount_list[index].firstname,
            acount.acount_list[index].lastname, acount.acount_list[index].statut, acount.acount_list[index].pay))
        if acount.acount_list[index].statut == "active":
            money_is_not_correct = True
            while money_is_not_correct:
                money = input("Entrez la somme du dépôt")
                try:
                    money = int(money)
                    assert money > 0
                    money_is_not_correct = False
                except ValueError:
                    print("Somme invalide, Merci d'entrer une somme valide")
                except AssertionError:
                    print("Somme invalide, votre somme doit être positive")

            acount.acount_list[index].add_money(money)
            acount.acount_list[index].add_operation("Dépot de {} effectué le {} ".format(money, datetime.strftime(datetime.today(), "%A %d %B %Y à  %H:%M:%S")))
            print("Dépôt effectué avec succès!\n ")
            print("Compte n° : {} \n Nom : {} \n Prénom : {} \n Statut : {} \n  Solde : {} ".format(
                acount.acount_list[index].acount_number, acount.acount_list[index].firstname,
                acount.acount_list[index].lastname, acount.acount_list[index].statut, acount.acount_list[index].pay))

            with open("bank_list", "wb") as file:
                pickle.dump(acount.acount_list, file)
        else:
            print("Votre compte est désactivé , Aucune opération ne peut être effectuer sur ce compte")


def take_mney(file_name):
    with open(file_name, 'rb') as file:
        acount.acount_list = pickle.load(file)
    acount_number_is_correct = False

    while not acount_number_is_correct:
        user_acount_number = input("Entrez votre numéro de compte : ")
        try:
            user_acount_number = str(user_acount_number)
            assert user_acount_number.isdigit() is True
            acount_number_is_correct = True
        except AssertionError:
            print("Numéro de compte invalide! Merci de reprendre la saisie")
    acount_is_find = False
    for user_acount in acount.acount_list:
        if user_acount.acount_number == int(user_acount_number):
            index = acount.acount_list.index(user_acount)
            acount_is_find = True
            break

    if not acount_is_find:
        print("Numéro de compte  incorrect ou compte inexistant merci de créer un compte")
    else:
        print("Compte n° : {} \n Nom : {} \n Prénom : {} \n Statut : {} \n  Solde : {} ".format(
            acount.acount_list[index].acount_number, acount.acount_list[index].firstname,
            acount.acount_list[index].lastname, acount.acount_list[index].statut, acount.acount_list[index].pay))
        if acount.acount_list[index].statut == "active":
            if acount.acount_list[index].pay == 0:
                print("Fond inssufisant pour faire de retrait!")
            else:
                money_is_not_correct = True
                while money_is_not_correct:
                    money = input("Entrez la somme du retrait")
                    try:
                        money = int(money)
                        assert money > 0
                        money_is_not_correct = False
                    except ValueError:
                        print("Somme invalide, Merci d'entrer une somme valide")
                    except AssertionError:
                        print("Somme invalide, votre somme doit être positive")

                if acount.acount_list[index].take_money(money):
                    acount.acount_list[index].add_operation(
                        "Retrait de {} effectué le {} ".format(money, datetime.strftime(datetime.today(),"%A %d %B %Y à %H:%M:%S")))
                    print("Retrait effectué avec succès!\n ")
                    print("Compte n° : {} \n Nom : {} \n Prénom : {} \n Statut : {} \n  Solde : {} ".center(100).format(
                        acount.acount_list[index].acount_number, acount.acount_list[index].firstname,
                        acount.acount_list[index].lastname, acount.acount_list[index].statut,
                        acount.acount_list[index].pay))

                    with open("bank_list", "wb") as file:
                        pickle.dump(acount.acount_list, file)
        else:
            print("Votre compte est désactivé , Aucune opération ne peut être effectuer sur ce compte")


def want_to_continue():
    answer = input("Continuer ou Quitter? : (C/Q)").lower()
    if answer == 'c':
        return True
    else:
        return False


def deactivate(file_name):
    with open(file_name, 'rb') as file:
        acount.acount_list = pickle.load(file)
    acount_number_is_correct = False

    while not acount_number_is_correct:
        user_acount_number = input("Entrez votre numéro de compte : ")
        try:
            user_acount_number = str(user_acount_number)
            assert user_acount_number.isdigit() is True
            acount_number_is_correct = True
        except AssertionError:
            print("Numéro de compte invalide! Merci de reprendre la saisie")
    acount_is_find = False
    for user_acount in acount.acount_list:
        if user_acount.acount_number == int(user_acount_number):
            index = acount.acount_list.index(user_acount)
            acount_is_find = True
            break

    if not acount_is_find:
        print("Numéro de compte  incorrect ou compte inexistant merci de créer un compte")
    else:
        acount.acount_list[index].statut = "Désactiver"
        with open("bank_list", "wb") as file:
            pickle.dump(acount.acount_list, file)
        print("Désactivation terminer")
        print("Compte n° : {} \n Nom : {} \n Prénom : {} \n Statut : {} \n  Solde : {} ".format(
            acount.acount_list[index].acount_number, acount.acount_list[index].firstname,
            acount.acount_list[index].lastname, acount.acount_list[index].statut, acount.acount_list[index].pay))


def show_one_acount(file_name):
    with open(file_name, 'rb') as file:
        acount.acount_list = pickle.load(file)
    acount_number_is_correct = False

    while not acount_number_is_correct:
        user_acount_number = input("Entrez votre numéro de compte : ")
        try:
            user_acount_number = str(user_acount_number)
            assert user_acount_number.isdigit() is True
            acount_number_is_correct = True
        except AssertionError:
            print("Numéro de compte invalide! Merci de reprendre la saisie")
    acount_is_find = False
    for user_acount in acount.acount_list:
        if user_acount.acount_number == int(user_acount_number):
            index = acount.acount_list.index(user_acount)
            acount_is_find = True
            break
    if not acount_is_find:
        print("Numéro de compte  incorrect ou compte inexistant merci de créer un compte")
    else:
        print("Compte n° : {} \n Nom : {} \n Prénom : {} \n Statut : {} \n  Solde : {} ".format(
            acount.acount_list[index].acount_number, acount.acount_list[index].firstname,
            acount.acount_list[index].lastname, acount.acount_list[index].statut, acount.acount_list[index].pay))


def show_acount_deactivate(file_name):
    with open(file_name, 'rb') as file:
        acount.acount_list = pickle.load(file)

    for user_acount in acount.acount_list:
        if user_acount.statut == "Désactiver":
            print("Compte n° : {} \n Nom : {} \n Prénom : {} \n Statut : {} \n  Solde : {} \n".format(
                user_acount.acount_number, user_acount.firstname,
                user_acount.lastname, user_acount.statut, user_acount.pay))
            print("___________________________________________________________________________\n")


def show_all_acount(file_name):
    with open(file_name, 'rb') as file:
        acount.acount_list = pickle.load(file)
    if len(acount.acount_list) == 0:
        print("Aucun compte trouvé")
    else:
        print("___________________________________________________________________________\n")

        for user_acount in acount.acount_list:
            print("Compte n° : {} \n Nom : {} \n Prénom : {} \n Statut : {} \n  Solde : {}".format(
                user_acount.acount_number, user_acount.firstname,
                user_acount.lastname, user_acount.statut, user_acount.pay))
            print("___________________________________________________________________________\n")


def find_acount_operations(file_name):
    with open(file_name, 'rb') as file:
        acount.acount_list = pickle.load(file)
    acount_number_is_correct = False

    while not acount_number_is_correct:
        user_acount_number = input("Entrez votre numéro de compte : ")
        try:
            user_acount_number = str(user_acount_number)
            assert user_acount_number.isdigit() is True
            acount_number_is_correct = True
        except AssertionError:
            print("Numéro de compte invalide! Merci de reprendre la saisie")
    acount_is_find = False
    for user_acount in acount.acount_list:
        if user_acount.acount_number == int(user_acount_number):
            index = acount.acount_list.index(user_acount)
            acount_is_find = True
            break
    if not acount_is_find:
        print("Numéro de compte  incorrect ou compte inexistant merci de créer un compte")
    else:
        if len(acount.acount_list[index].operations) == 0:
            print("Aucune transaction n'est encore effectué")
        else:
            for operation in acount.acount_list[index].operations:
                print(operation.center(100))
