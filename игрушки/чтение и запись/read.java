import java.io.*;
 
public class Read {
 
    public static void main(String[] args) {
        
        try(FileReader reader = new FileReader("Main.java"))
        {
            int c;
            while((c=reader.read())!=-1){
                 
                System.out.print((char)c);
            } 
        }
        catch(IOException ex){
             
            System.out.println(ex.getMessage());
        }   
    } 
}