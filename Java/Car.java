class Car {
    Integger id;
    String license;
    Account driver;
    Integger passenger;

    public Car(String license, Account driver) {
        this.license = license;
        this.driver = driver;
    }

    printDataCar(){
        System.out.printLn("License: " + license + " Driver: " + driver):
    }
}