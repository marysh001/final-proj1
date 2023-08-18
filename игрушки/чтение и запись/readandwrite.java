import java.io.*;
  
public class Program {
  
    public static void main(String[] args) {
          
        try(FileInputStream fin=new FileInputStream("Write.java");
                FileOutputStream fos=new FileOutputStream("Main.java"))
        {
            byte[] buffer = new byte[256];
             
            int count;
            while((count=fin.read(buffer))!=-1){
               
                fos.write(buffer, 0, count);
            }
            System.out.println("Данные записаны");
        }
        catch(IOException ex){
              
            System.out.println(ex.getMessage());
        } 
    } 
}