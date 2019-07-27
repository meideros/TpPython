from random import *


class acount:
    acount_list = list()

    def __init__(self, firstname, lastname):
        self._firstname = firstname
        self._lastname = lastname
        self._acount_number = randrange(1234567890, 9876543210)
        self._statut = "active"
        self._pay = 0
        self._operations = []

    def _set_firstname(self, new_value):
        self._firstname = new_value

    def _get_firstname(self):
        return self._firstname

    def _set_lastname(self, new_value):
        self._lastname = new_value

    def _get_lastname(self):
        return self._lastname

    def _get_acount_number(self):
        return self._acount_number

    def _set_acount_number(self, new_value):
        self._acount_number = new_value

    def _get_statut(self):
        return self._statut

    def _set_statut(self, new_value):
        self._statut = new_value

    def _set_pay(self, new_value):
        self._pay = new_value

    def _get_pay(self):
        return self._pay

    def add_money(self, money_value):
        self._pay += money_value

    def take_money(self, money_value):
        if money_value > self._pay:
            print("Solde Inssufisant")
        else:
            self._pay -= money_value
            return True

    def _get_operation(self):
        return self._operations

    def add_operation(self, opeartion):
        self._operations.append(opeartion)

    firstname = property(_get_firstname, _set_firstname)
    lastname = property(_get_lastname, _set_lastname)
    acount_number = property(_get_acount_number, _set_acount_number)
    statut = property(_get_statut, _set_statut)
    pay = property(_get_pay, _set_pay)
    operations = property(_get_operation)
