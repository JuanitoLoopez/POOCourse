class Main {
    public static void main(String[] args) {
        System.out.Println("Hola Mundo");

        Car car = new Car();
        car.license = "AMQ1123";
        car.driver = "Andres Herrera";
        car.passenger = 5;
        car.printDataCar();

        Car car2 = new Car();
        car2.license = "ANQ123";
        car2.driver = "Andrea Herrera";
        car2.passenger = 3;
        car2.printDataCar();
    }
}