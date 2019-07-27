

import pickle




class Compte:
    
   compteur = 0
   
   
   def __init__(self, nom, prenoms,  solde):
    
       self.nom = nom
       self.prenoms = prenoms
       self.statut = "actif"
       self.solde = solde
       self.numCompte = ''
       
   def creerNum(self):
        liste = []
        with open('Compte', 'rb') as compte:
          list = pickle.Unpickler(compte)
          liste = list.load()
         
        
          Compte.compteur=liste[0] +1
          liste[0]= Compte.compteur  
          
       
          if Compte.compteur < 10 :
              self.numCompte = "C000"+str(Compte.compteur)
          elif Compte.compteur >=10 and Compte.compteur < 100 :
              self.numCompte = "C00"+str(Compte.compteur)
          elif  Compte.compteur >=100 and Compte.compteur < 1000 : 
              self.numCompte = "C0"+str(Compte.compteur)
              
              
              
        with open('Compte' ,'wb' ) as compte :          
            list = pickle.Pickler(compte)
            list.dump(liste)
       
   def getNom(self): 
       return self.nom
   
   def setNom(self, nom):
       self.nom =  nom
       
   def getPrenoms(self): 
       return self.prenoms
   
   def setPrenoms(self, prenom):
       self.prenoms =  + prenom  
       
       
   def getStatut(self): 
       return self.statut
   
   def setStatut(self, statut ):
       self.statut = statut   
       
   def getSolde(self): 
       return self.solde
   
   def setSolde(self, solde ):
       self.solde = solde 
   
   def getNumCompte(self): 
       return self.numCompte
   
   def setNumCompte(self, numCompte):
       self.numCompte = numCompte 
       
       
class Transaction:
    
    def __init__(self, numCompte, info):
    
       self.numCompte = numCompte
       self.info = info
      
    def getNumCompte(self): 
       return self.numCompte
   
  
    def getInfo(self): 
       return self.info
   
   
              
               
       
def ajoutCompte( infoCompte):
       
        
        liste = []
        with open('Compte', 'rb') as compte:
          list = pickle.Unpickler(compte)
          liste = list.load()
         
      
        with open('Compte', 'wb') as compte:
          ecrire = pickle.Pickler(compte)
          liste.append(infoCompte)
          ecrire.dump(liste)
        print("Le compte a été ajouté avec succes") 
        
        
def depot(numCompte, plus):
    liste = []
    transa = []
    ok = False
    existe = False
    with open('Compte', 'rb') as compte:
                lis = pickle.Unpickler(compte)
                liste = lis.load()
                i = 0
                for comptes in liste:
                  if i>0:  
                    if comptes.getNumCompte()== numCompte :
                       existe = True
                       if comptes.getStatut() == "desactive":
         
                            print("Impossible de faire le depot, ce compte est desactive")
               
                       else :
                            solde = comptes.getSolde() + plus
                            comptes.setSolde(solde)
                            info = "Il y a eu un depot de "+ str(plus)

                            transaction = Transaction(comptes.getNumCompte(),info)
                            with open('transaction', 'rb') as trans:
                                    lire= pickle.Unpickler(trans)
                                    transa = lire.load()   
                            
                           
                            transa.append(transaction)
                            ok = True
       
                           
                  else:
                      i =+1               
                if existe == False :
                    print("Ce numero de compte n'existe pas dans notre banque")       
                
    if ok:
        with open('transaction', 'wb') as trans:
                                ecrire = pickle.Pickler(trans)
                                ecrire.dump(transa)
                                
                    
                
        with open('Compte', 'wb') as compte:
          ecrire = pickle.Pickler(compte)
          ecrire.dump(liste)
                 
      
       
        print("Le dépot a été éffectué avec succes")           
              
              
              
def retrait( numCompte, moins): 
    
    ok = False
    liste = []
    existe = False
    transa = []
    with open('Compte', 'rb') as compte:
                lis = pickle.Unpickler(compte)
                liste = lis.load()
                
                i = 0
                for comptes in liste:
                  if i>0:  
                    if comptes.getNumCompte()== numCompte :
                       existe =True
                       if comptes.getStatut() == "desactive":
         
                           print("Impossible de faire le retrait, ce compte est desactive")
               
                       else :
                            solde = comptes.getSolde()
                            if solde < moins:
                                print("Impossible de faire le retrait, ce compte ne dispose pas de cette somme") 
                            else:    
                               comptes.setSolde (comptes.getSolde() - moins)
                               info = "Il y a eu un retrait de  "+ str(moins)

                               transaction = Transaction(comptes.getNumCompte(),info)
                               with open('transaction', 'rb') as trans:
                                    lire= pickle.Unpickler(trans)
                                    transa = lire.load()         
                
                
                               
                               transa.append(transaction)
                               ok = True
                              
                  else:
                      i =+1 
                if existe == False :
                    print("Ce numero de compte n'existe pas dans notre banque")       
    if ok :
       
        
        with open('transaction', 'wb') as trans:
                                  ecrire = pickle.Pickler(trans)
                                  ecrire.dump(transa)                                  
                
                
        with open('Compte', 'wb') as compte:
          ecrire = pickle.Pickler(compte)
          ecrire.dump(liste)
        
       
        print("Le retrait a été éffectué avec succes")          
              
              
def afficherComptes():
         
    with open('Compte', 'rb') as compte:
        lis = pickle.Unpickler(compte)
        liste = lis.load()
                
        i = 0
        for selfe in liste:
          if i>0:   
            print("*********Info sur le compte {0}  ".format(selfe.numCompte)) 
            print("Nom: {0}".format(selfe.nom))
            print("Prenoms: {0}".format(selfe.prenoms))
            print("Solde: {0}".format(selfe.solde))
            print("Statut: {0}".format(selfe.statut))
          else:
              i = +1   
     
    
def afficherCompte(numCompte):
         
    with open('Compte', 'rb') as compte:
        lis = pickle.Unpickler(compte)
        liste = lis.load()
        existe = False        
        i = 0
        for selfe in liste:
          if i>0:
            if selfe.getNumCompte() == numCompte :
                existe = True
                print("*********Info sur le compte {0}**********  ".format(selfe.numCompte)) 
                print("Nom: {0}".format(selfe.nom))
                print("Prenoms: {0}".format(selfe.prenoms))
                print("Solde: {0}".format(selfe.solde))
                print("Statut: {0}".format(selfe.statut))
                
          else:
              i = +1 
        if existe == False:
            print("Ce compte n'existe pas dans notre banque")                
           
def RechercheTransaction(numCompte):
    with open('transaction', 'rb') as compte:
        lis = pickle.Unpickler(compte)
        liste = lis.load()
                
        i=0
        for transaction in liste:
            if transaction.getNumCompte()== numCompte :
                i += 1
                print(str(i)+"-"+transaction.getInfo()+"\n")
        if i==0:
            print("Aucune transaction n'a été éffectué sur ce compte")
            
def DesactiveCompte(numCompte): 
    liste = []
    existe = False
    with open('Compte', 'rb') as compte:
                lis = pickle.Unpickler(compte)
                liste = lis.load()
                
                i = 0
                for comptes in liste:
                  if i>0:  
                    if comptes.getNumCompte()== numCompte :
                        existe = True 
                        if comptes.getStatut() == "desactive":
                            print("Ce compte a déja été désactivé")
                            
                        else :
                            comptes.setStatut("desactive")
                  else:
                    i = +1 
                
                
    with open('Compte', 'wb') as compte:
        list = pickle.Pickler(compte) 
        list.dump(liste)
    if existe :
            
       print("Le compte a été désactivé avec succes") 
    else :
        print("Ce compte a n'existe pas dans notre banque")      
     
     
     
def AfficherCompteDesactive():
    with open('Compte', 'rb') as compte:
        lis = pickle.Unpickler(compte)
        liste = lis.load()
        existe = False        
        i = 0
        for selfe in liste:
          if i>0:  
            if  selfe.getStatut() == "desactive":
                existe = True
                print("*********Info sur le compte {0}  ".format(selfe.numCompte)) 
                print("Nom: {0}".format(selfe.nom))
                print("Prenoms: {0}".format(selfe.prenoms))
                print("Solde: {0}".format(selfe.solde))
                print("Statut: {0}".format(selfe.statut))
              
          else:
                i = +1 
        if existe == False:
           print("Aucun compte n'a été désactivé")
          

          
    
            
        
                                           
               
        
        
        
    