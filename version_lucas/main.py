from function import *

init_file = init_file_or_get_acount_list("bank_list")
still_going = True
while still_going:

    choice = show_menu_and_get_user_choice()

    if choice == 1:
        adding_acount(init_file)
    elif choice == 2:
        add_money_in_user_acount("bank_list")
    elif choice == 3:
        take_mney("bank_list")
    elif choice == 4:
       find_acount_operations("bank_list")
    elif choice == 5:
        deactivate("bank_list")
    elif choice == 6:
        show_one_acount("bank_list")
    elif choice == 7:
        show_acount_deactivate("bank_list")
    elif choice == 8:
        show_all_acount("bank_list")
    elif choice == 9:
        print("Au revoir!")
        exit(0)
    still_going = want_to_continue()
