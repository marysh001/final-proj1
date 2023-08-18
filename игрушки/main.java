
package automat;

import java.util.List;

public class Main {

    public static void main(String[] args){
        Automat =  new Automat();
        
        automat.add(new toy(name: "кукла", Number(20 "percent"), id(1)));
        automat.add(new toy(name: "робот", Number(20 "percent"), id(2)));
        automat.add(new toy(name: "конструктор", Number(60 "percent"), id(3)));
        automat.getByName("кукла"), automat.getByName("робот"), automat.getByName("конструктор");
    System.out.println(automat.getInfo());
    }
}