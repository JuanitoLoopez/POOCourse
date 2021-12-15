from account import Account
from car import Car 

if __name__ == "__main__":
    print("Hola Mundo")

    car = Car("AMX323", Account("Marcos Cruz", "ASGF3245"))
    print(vars(car))
    print(vars(car.driver))
    #car.license = "XAN321"
    #car.driver = "Andres Herrera"

    car2 = Car("XAW324", Account("Mario Gonzalez", "234BASD"))
    print(vars(car2))
    print(vars(car2.driver))
    #car2.license = "ZYZ323"
    #car2.driver = "Maria Herrera"