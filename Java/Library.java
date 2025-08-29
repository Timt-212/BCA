import java.util.*;

public class Library {
    public static void main(String[] args) {
        book[] arr = new book[50];
        book b1 = new book();
        book b2 = new book();

        arr[0] = b1;
        arr[1] = b2;

        for(int i=0; i<2; i++) {
            System.out.println("Details of Book " + (i+1) + ":");
            System.out.println("Serial Number: " + arr[i].SIno);
            System.out.println("Quantity: " + arr[i].BookQuantity);
            System.out.println("Author Name: " + arr[i].AuthorName);
            System.out.println("Book Name: " + arr[i].BookName);
            System.out.println();
        }
       
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
        System.out.println();   
    }
}