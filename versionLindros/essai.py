from compte import *

print("---------------------Bienvenue----------------------")
fin=False
while fin==False :
    choix=menu()
    if choix == 1 :
        ajouter()
    if choix==7:
        listeCompte()
    if choix==2:
        depot()
    if choix ==6:
        afficherCompte()
    if choix == 9:
        fin=True

