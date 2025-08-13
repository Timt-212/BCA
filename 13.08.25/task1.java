import java.util.Scanner;

 class mark {
    String name;
    int mark1, mark2, mark3;

    void calculateTotal() {
        int total = mark1 + mark2 + mark3;
        System.out.println("\nStudent Name: " + name);
        System.out.println("Total Marks: " + total);
    }
}

public class Student {

    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);

        mark s = new mark();

        System.out.print("Enter student name: ");
        s.name = sc.nextLine();

        System.out.print("Enter mark 1: ");
        s.mark1 = sc.nextInt();

        System.out.print("Enter mark 2: ");
        s.mark2 = sc.nextInt();

        System.out.print("Enter mark 3: ");
        s.mark3 = sc.nextInt();

        s.calculateTotal();
    }
}
