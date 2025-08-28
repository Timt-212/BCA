class c implements a, b{
    public void show(){
            System.out.println("Class A");
        }

    public void display(){
            System.out.println("Class B");
        }
    public static void main(String[] args) {
        a a1 = new c();
        b b1 = new c();

        a1.show();
        b1.display();
    }
}

interface a {
    void show();
}

interface b {
    void display();
}