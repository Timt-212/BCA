class Student {
    String name;
    int age;
    int[] marks = new int[3]; // marks for 3 subjects

    // Constructor to initialize name, age, and marks
    Student(String name, int age, int[] marks) {
        this.name = name;
        this.age = age;
        if (marks.length == 3) {
            this.marks = marks;
        } else {
            System.out.println("Please enter exactly 3 marks.");
        }
    }

    // Method to calculate total marks
    int getTotalMarks() {
        int total = 0;
        for (int mark : marks) {
            total += mark;
        }
        return total;
    }

    // Method to calculate average marks
    double getAverageMarks() {
        return getTotalMarks() / 3.0;
    }

    // Method to print student details and marks
    void printDetails() {
        System.out.println("Student Name: " + name);
        System.out.println("Age: " + age);
        System.out.println("Marks: ");
        for (int i = 0; i < marks.length; i++) {
            System.out.println(" Subject " + (i + 1) + ": " + marks[i]);
        }
        System.out.println("Total Marks: " + getTotalMarks());
        System.out.println("Average Marks: " + getAverageMarks());
        System.out.println("-----------------------------------");
    }
}

public class Main {
    public static void main(String[] args) {
        int[] marks1 = {85, 90, 78};
        int[] marks2 = {70, 88, 92};

        Student s1 = new Student("Rahul", 20, marks1);
        Student s2 = new Student("Priya", 21, marks2);

        s1.printDetails();
        s2.printDetails();
    }
}
