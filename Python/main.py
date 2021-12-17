from account import Account
from car import Car
from UberX import UberX

if __name__ == "__main__":
    print("Hola Mundo")

    uberX = UberX("AMX323", Account("Marcos Cruz", "ASGF3245"), "Chevrolet", "Spark")
    print(vars(uberX))
    print(vars(uberX.driver))
