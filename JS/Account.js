class Account{
    constructor(name, document){
        this.id;
        this.name = name;
        this.document = document;
        this.email;
        this.password;
    }

    printDataUser(){
        console.log("Print data user in the console from Account.");
        console.log("Name: " + this.name + " Document: " + this.document);
    }
}
