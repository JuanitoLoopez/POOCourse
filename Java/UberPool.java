class UberPool extends Car {
    String brand;
    String model;

    UberPool(String license, Account dirver, String brand, String model)
    super(license,driver);
    this.brand = brand;
    this.model = model;
}