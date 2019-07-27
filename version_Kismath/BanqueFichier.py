#-*-coding: utf-8 -*-

import pickle

from ClassBank import Compte ,ajoutCompte, Transaction, depot, retrait, afficherCompte,afficherComptes,DesactiveCompte,AfficherCompteDesactive, RechercheTransaction

print(" ************************************************* Welcome to SmartBank **********************************************")

liste = []
kis = False
with open('Compte', 'rb') as compte:
    lire = pickle.Unpickler(compte)
    try:
       lis = lire.load()  
  
    except EOFError:
        kis = True
        
if kis:        

    liste.append(0)
    with open('Compte', 'wb') as compte:
          ecrire = pickle.Pickler(compte)
          ecrire.dump(liste)
          compte.close()  
while True:
    
  print("Choisissez entre les options suivantes:")
  print("1- Ajout dun compte bancaire")
  print("2- Faire un depot")
  print("3- Faire un retrait")
  print("4- Rechercher les transactions d'un compte")
  print("5- Desactiver un compte")
  print("6- Afficher un compte bancaire")
  print("7- Lister tous les comptes bancaires")
  print("8- Lister les comptes desactives")
  print("9- Quitter")
  
  choix = input("Faites votre choix: ")
  
  choix = int(choix)
  
  if choix == 1:
      nom = input("Entrez votre nom: ")
      prenom = input("Entrez votre prenom: ")
      solde = input("Entrez le solde: ")
      solde = int(solde)
      
      compte = Compte(nom, prenom, solde)
      compte.creerNum()
      
      ajoutCompte(compte)
      print("\n")
      
      
  elif choix ==2 : 
      numCompte = input("Entrez le numero du compte: ")
      plus = input("Entrez la somme: ") 
      plus = int(plus)
      
      depot(numCompte, plus)
      print("\n")
      
  elif choix ==3 : 
      numCompte = input("Entrez le numero du compte: ")
      moins = input("Entrez la somme: ") 
      moins = int(moins)
      
      retrait(numCompte, moins)
      print("\n")     
 
  elif choix ==4 :
      numCompte = input("Entrez le numero du compte: ")
      RechercheTransaction(numCompte)
      print("\n")
  
  elif choix ==5 :
      numCompte = input("Entrez le numero du compte: ")
      DesactiveCompte(numCompte)
      print("\n")
                 
  elif choix ==6 :            
      numCompte = input("Entrez le numero du compte: ")
      afficherCompte(numCompte)
      print("\n")
  
  elif choix ==7 : 
      afficherComptes() 
      print("\n")
  
  elif choix ==8 :
      AfficherCompteDesactive()
      print("\n")     
  
  
  elif choix ==9 :
      break;
      print("\n")       
  
  else :
      print("Fais un bon choix Magengo!!!!!")       
      print("\n")      
      
      
      
      
      
      
      
