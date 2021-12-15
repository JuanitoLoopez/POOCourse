class UberVan extends Car {
    Map<String, Map<String,Integer>> typeCarAccepted;
    ArrayList<String> seatsMaterial;
    String brand;
    String model;

    UberVan(String license, Account dirver, String brand, String model
    Map<String, ArrayList<String,Integer>> typeCarAccepted,
    ArrayList<String> seatsMaterial)

    super(license,driver);
    this.typeCarAccepted = typeCarAccepted;
    this.seatsMaterial = seatsMaterial;
    this.brand = brand;
    this.model = model;
}