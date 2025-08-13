class Student {
    String name;
    int age;

    Student() {
        this("Unknown", 0); // calls the parameterized constructor
        System.out.println("Default constructor called");
    }

    Student(String name, int age) {
        this.name = name;
        this.age = age;
        System.out.println("Parameterized constructor called");
    }
}

public class Main {
    public static void main(String[] args) {
        Student s1 = new Student();
        Student s2 = new Student("Alice", 21);
    }
}
