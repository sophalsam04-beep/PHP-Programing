interface Animal {
    public function makeSound();
}

class Dog implements Animal {
    public function makeSound() {
        return "Dog says: Woof Woof...!";
    }
}

class Cat implements Animal {
    public function makeSound() {
        return "Cat says: Meow Meow...!";
    }
}

class Cow implements Animal {
    public function makeSound() {
        return "Cow says: Moo Moo...!";
    }
}

$animals = [new Dog(), new Cat(), new Cow()];

foreach ($animals as $animal) {
    echo $animal->makeSound() . "<br>";
}