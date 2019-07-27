#encoding :utf-8
import os
from random import *
from math import *
somme=10
i=0
   
bon=False
continuer=True

while continuer==True :
    
    while bon == False:
        try :
            nb=input("Entrez le numero sur lequel vous misez ")
            nb=int(nb)
            assert nb>0 and nb<50
            bon=True
        except ValueError:
         print("Vous n'avez pas saisi de nombre")
        except AssertionError :
         print("nnnnnnnn")
         
    mise =0
    while mise <=0 or mise >somme:
        mise=input("Entrez la somme que vous misez ")
        try :
            mise=int(mise)
        except ValueError as erreur:
            print("Erreur : ", erreur, "veuillez reessayer!")
        except AssertionError :
             print("Vous avez saisi un nombre negatif ou une nombre trop grand... veuillez reessayer! ")

    nb_trouver =randrange(50)
    print("La roulette est tomber sur le ", nb_trouver)

    if nb==nb_trouver :
        print('trouver')
        mise = mise + (mise*3)
        print(mise)
        somme+=mise
        
    elif nb %2==0 and nb_trouver%2==0:
             print("Cest aussi un nombre pAIR")
             mise = mise + (mise*3)
             print(mise)
             somme+=mise
             
    elif nb %2 != 0 and nb_trouver%2 !=0:
             print("Cest aussi un nombre impAIR")
             mise = mise + (mise/2)
             print(mise)
             somme+=mise
            
    elif nb %2==0 and nb_trouver!=0:
             print("Different")
             print(mise)
             somme-=mise
             
    elif nb %2!=0 and nb_trouver %2==0:
             print("Different")
             print(mise)
             somme-=mise
    
    quitter=input("Voulez vous quitter : O ou N ")
    if quitter =="O" or quitter =="o" :
         print("Votre argent est ", somme)
         continuer=False
    else :
             bon=False

        


