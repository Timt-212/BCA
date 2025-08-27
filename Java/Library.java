import java.util.*;

public class Library {
    public static void main(String[] args) {
        book b1 = new book();

    }
}

class book {
    public int SIno;
    public int BookQuantity;
    public String AuthorName;
    public String BookName;

    Scanner input = new Scanner(System.in);
    public book() {
        System.out.println("Enter the Serial Number of the Book:");
        SIno = input.nextInt();
        System.out.println("Enter the Quantity of the Book:");
        BookQuantity = input.nextInt();
        input.nextLine();
        System.out.println("Enter the Author Name of the Book:");
        AuthorName = input.nextLine();
        System.out.println("Enter the Book Name:");
        BookName = input.nextLine();
    }
}