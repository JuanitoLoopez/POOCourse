from car import Car 

if __name__ == "__main__":
    print("Hola Mundo")

    car = Car()
    car.license = "XAN321"
    car.driver = "Andres Herrera"
    print(vars(car))

    car2 = Car()
    car2.license = "ZYZ323"
    car2.driver = "Maria Herrera"
    print(vars(car2))