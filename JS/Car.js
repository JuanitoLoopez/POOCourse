class Car {
    constructor(license, driver) {
        this.license = license;
        this.driver = driver;
    }
    printDataCar() {
        console.log(this.driver);
        console.log(this.driver.name);
        console.log(this.driver.document);
    }
}

// function Car(license, driver) {
//     this.id;
//     this.license = license;
//     this.driver = driver;
//     this.passenger;
// }

// Car.prototype.printDataCar = function() {
//     console.log(this.driver);
//     console.log(this.driver.name);
//     console.log(this.driver.document);
// }