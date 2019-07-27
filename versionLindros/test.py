#coding :utf -8
import math
import os
import pickle
from multipli import*
from compte import*
class pers :
  def __init__(self,nom,age):
    self.nom=nom
    self._age=age

  def _getage(self):
    if self._age =="":
      print("erreur")
    else:  
      return self._age
  def _setage(self,nage):
    if nage<0:
      self._age=0
    else:
      self._age=nage
  def afficher(self):
    print ("{} a {} ans".format(self.nom,self.age))

  age=property(_getage,_setage)
  
class man(pers):
  def __init__(self,name,age,taille):
    pers.__init__(self, name,age)
    self.taille = taille
  def afficher(self):
    print ("{} a {} ans et mesure {}".format(self.nom,self.age,self.taille))

#MAIN
lui = man("iki",20,50)
elle = man("dani",20,50)
with open("player.data","wb") as fic :
  re=pickle.Pickler(fic)
  re.dump(elle)
  rt=pickle.Pickler(fic)
  rt.dump(lui)
  

"""with open("player.data","rb") as fic :
  get_re=pickle.Unpickler(fic)
  rt= get_re.load()
"""

compteT= []
with open("player.data", "rb") as fic :
        while True:
            try:
              compteT.append(pickle.load(fic))
            except EOFError:
              break
i=0
while i < len(compteT):
  print(compteT[i].afficher())
  i+=1


