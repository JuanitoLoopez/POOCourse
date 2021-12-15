class Main {
    public static void main(String[] args) {
        System.out.Println("Hola Mundo");

        Car car = new Car("AMQ1123", new Account("Fer", "2341FP"));
        car.passenger = 5;
        car.printDataCar();

        Car car2 = new Car(S"ANQ123", Account("Sonia", "324ABC"));
        car2.passenger = 3;
        car2.printDataCar();
    }
}