#coding : utf-8
def table(nb):
    i=0
    while i<=11:
        print(i," * ", nb, " = ", i*nb)
        i+=1
# test de la fonction table
if __name__ == "__main__":
    table(4)
    os.system("pause")
class compte:
  #creation de la classe Compte
    
  def __init__(self,num,nom,prenom,statut,solde):
    self.num=num
    self.nom=nom
    self.prenom=prenom
    self.statut=statut
    self.solde=solde
