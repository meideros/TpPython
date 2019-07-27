import pickle as d

chaine=[]
def menu():
    bon = False
    print("1- Ajout d'un compte bancaire")
    print("2- Faire un dépot")
    print("3- Faire un retrait")
    print("4- Rechercher les transactions d'un compte")
    print("5- Desactiver un compte")
    print("6- Afficher un compte bancaire")
    print("7- Lister tous les comptes bancaires")
    print("8- Lister tous les comptes desactivés")
    print("9- Quitter")
    while bon == False:
        choix = input("Choix ")
        try:
            choix = int(choix)
            assert choix >= 1 and choix <= 9
            bon = True
        except ValueError:
            print("Valeur incorrecte")
        except AssertionError:
            print("Mauvais choix")
        except TypeError:
            print("Entrez un nombre")
    return choix


class compte:
    # creation de la classe Compte

    def __init__(self, num, nom, prenom, solde):
        self.num = num
        self.nom = nom
        self.prenom = prenom
        self.statut = "Activé"
        self.solde = solde

    def afficher(self):
        print("Numero de compte : {}".format(self.num))
        print("Nom : {}".format(self.nom))
        print("Prenom : {}".format(self.prenom))
        print("Statut : {}".format(self.statut))
        print("Solde : {}".format(self.solde))

    def getNum(self):
        return self.num

    def getNom(self):
        return self.nom

    def getPrenom(self):
        return self.prenom

    def getStatut(self):
        return self.statut

    def getSolde(self):
        return self.solde

def afficherCompte():
    chaine=[]
    i=0
    numC=input("Entrez le numero de compte")
    numC =int(numC)
    with open('compteB', 'rb') as fic:
        while True:
            try:
                lis = d.Unpickler(fic)
                chaine = lis.load()

                for selfe in chaine:
                    if selfe.num== numC:
                       print(selfe.afficher())
            except EOFError:
                break
def ajouter():

    menufin = False
    while menufin == False:

        bon = False
        print("                 Ajout")
        while bon == False:
            num = input("Numero de compte")
            try:
                num = int(num)
                bon = True
            except ValueError:
                print("Valeur incorrecte")
            except AssertionError:
                print("Mauvais choix")
            except TypeError:
                print("Entrez un nombre")

        bon = False
        while bon == False:
            nom = input("Nom de la personne ")

            try:
                if nom == "":
                    print("Veuillez saisir un prenom")
                else:
                    bon = True
            except:
                print("erreur")

        bon = False
        while bon == False:
            prenom = input("Prenom de la personne ")

            try:
                if prenom == "":
                    print("Veuillez saisir un prenom")
                else:
                    bon = True
            except:
                print("erreur")
        bon = False
        while bon == False:
            solde = input("Solde ")
            try:
                solde = int(solde)
                assert solde > 0
                bon = True
            except ValueError:
                print("Valeur incorrecte")
            except AssertionError:
                print("Mauvais choix")
            except TypeError:
                print("Entrez un nombre")

        h1 = compte(num, nom, prenom, solde)

        with open("compteB", "wb") as fic:
            re = d.Pickler(fic)
            chaine.append(h1)
            re.dump(chaine)




        fin = input("Voulez vous ajouter un autre compte oui/non ")
        fin = fin.upper()
        if fin == "N":
            menufin = True

def listeCompte():

    with open('compteB', 'rb') as fic:
                lis = d.Unpickler(fic)
                chaine = lis.load()

                for selfe in chaine:
                    print(selfe.afficher())
def depot():
    bon = False
    print("-------------------------------BIENVENUE------------------------")
    # numC=input("Veuillez saisir le numero de compte sur lequel vous voulez faire le depot ")
    while bon == False:
        numC = input("Veuillez saisir le numero de compte sur lequel vous voulez faire le depot ")
        try:
            numC = int(numC)
            bon = True
        except ValueError:
            print("Valeur incorrecte")
        except AssertionError:
            print("Mauvais choix")
        except TypeError:
            print("Entrez un nombre")

    compteT = []
    with open("compteB", "rb") as fic:
        while True:
            try:
                compteT.append(d.load(fic))
            except EOFError:
                break
    i = 0
    trouve = False
    while i < len(compteT):
        if numC == compteT[i]:
            bon = False
            while bon == False:
                somme = input("Vous voulez faire un depot de combien")
                try:
                    somme = int(somme)
                    bon = True
                except ValueError:
                    print("Valeur incorrecte")
                except AssertionError:
                    print("Mauvais choix")
                except TypeError:
                    print("Entrez un nombre")
            compteT[i].solde += somme
            print(compteT[i].solde)
            with open("compteB", "wb") as fic:
                re = d.Pickler(fic)
                re.dump(compteT)
        break


"""     
with open("compteB.txt", "wb") as fic:
                re = d.Pickler(fic)
                re.dump(compteT)
                
                
                
                while True:
                    try:
                        lis = d.Unpickler(fic)
                        chaine = lis.load()
                        somme = 0
                        bon= False
                        for selfe in chaine:
                            if numC == selfe.num:
                                while bon == False:
                                    somme = input("Vous voulez faire un depot de combien")
                                    try:
                                        somme = int(somme)
                                        bon = True
                                    except ValueError:
                                        print("Valeur incorrecte")
                                    except AssertionError:
                                        print("Mauvais choix")
                                    except TypeError:
                                        print("Entrez un nombre")
                                print(selfe.solde)
                                selfe.solde+=somme
                                print(selfe.solde)
                            break
                    except EOFError:
                        break
                


"""

"""
elif choix==7: #LISTE DES COMPTES BANCAIRES
      compteT=[]
      with open("compteB.txt", "rb") as fic :
        while True:
            try:
              compteT.append(d.load(fic))
            except EOFError:
              break
      i=0
      while i < len(compteT):
        print(compteT[i].afficher())
        print(" ")
        i+=1
    elif choix==2:
      bon=False
      print("-------------------------------BIENVENUE------------------------")
      #numC=input("Veuillez saisir le numero de compte sur lequel vous voulez faire le depot ")
      while bon ==False :
              os.system("cls")
              numC=input("Veuillez saisir le numero de compte sur lequel vous voulez faire le depot ")
              try :
                numC = int(numC)
                bon=True
              except ValueError:
               print("Valeur incorrecte")
              except AssertionError:
                print("Mauvais choix")
              except TypeError :
                print("Entrez un nombre")
      compteT=[]
      with open("compteB.txt", "rb") as fic :
        while True:
            try:
              compteT.append(d.load(fic))
            except EOFError:
              break
      i=0
      trouve=False
      while i < len(compteT):
        if numC == compteT[i].num  :
          bon=False
          while bon ==False :
              os.system("cls")
              somme= input ("Vous voulez faire un depot de combien")
              try :
                somme = int(somme)
                bon=True
              except ValueError:
               print("Valeur incorrecte")
              except AssertionError:
                print("Mauvais choix")
              except TypeError :
                print("Entrez un nombre")
          compteT[i].solde+=somme
          print(compteT[i].solde)
          with open ("compteB.txt", "wb") as fic :
              re=d.Pickler(fic)
              re.dump(compteT)
        break
"""
