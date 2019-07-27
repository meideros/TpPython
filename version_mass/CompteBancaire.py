#!/usr/bin/python
from Menu import *
class Client:

   def __init__(self):

      self.numcompte = "numerocompte"
      self.nom ="nomclient"
      self.prenom = "prenomclient"
      self.status = "statuscompte"
      self.solde = "soldecompte"

      def ajouter(self,formulaire_a_remplir):
          if choix == 1:

                compte = enregistrer_comptes()

                num_compte = input("le  numero de votre vcompte est num_compte")
                nom = input("entrez votre nom")
                prenom = input("entrez votre prénom")
                status= "actif"
                solde = input("afficher lesolde du compte")

          elif choix == 2 or choix == 3:

             status_compte_is_active = False

             if  not status_compte_is_active:
                print(" vous pouvez effectué votre dépôt")

                status_compte_is_active = True
             else:
                print("veuillez activez votre compte pour effectuer le dépôt")




