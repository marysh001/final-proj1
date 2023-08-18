import java.util.Scanner;
  
public class Write {
   
    public static void main(String[] args) {
           
        Scanner in = new Scanner(System.in);
        System.out.print("Bведите название игрушки: ");
        String name = in.nextLine();
        System.out.print("введите процент выпадения без "%": ");
        int percent = in.nextInt();
        System.out.printf("Название: %s  процент выпадения: %d \n");
        in.close();
    }
}