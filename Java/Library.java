import java.util.*;

public class Library {
    public static void main(String[] args) {
        book b1 = new book();
        System.out.println("Book Details:");
        System.out.println("Serial Number: " + b1.SIno);
        System.out.println("Quantity: " + b1.BookQuantity);
        System.out.println("Author Name: " + b1.AuthorName);
        System.out.println("Book Name: " + b1.BookName);

        book b2 = new book();
        System.out.println("Book Details:");
        System.out.println("Serial Number: " + b2.SIno);
        System.out.println("Quantity: " + b2.BookQuantity);
        System.out.println("Author Name: " + b2.AuthorName);
        System.out.println("Book Name: " + b2.BookName);
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