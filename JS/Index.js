var car = new Car("ASDF23", new Account("Marti Macfly", "FSD324") );
car.passenger = 3;
car.printDataCar();

var carUberX = new UberX("L342", new Account("Rocio Martinez", "DP242"), "Chevrolet", "Spark");
carUberX.printDataCar();
console.log("");
console.log(carUberX);
console.log("");

var userAccount = new Account("Alex Hernández", "PDOC13321");
userAccount.printDataUser();
var user = new User("Martin Lopez", "PDOC234");
user.printDataUser();