public class random {
    public static double getRandomIntegerBetweenRange(double min, double max){
        double x = (int)(Math.random()*((max-min)+1))+min;
        return x;
    }
    
}

//мысль такова, сделать просто рандомайзер, который выкидывает игрушку по id случайно и записывает эту игрушку в файл, 
//записывать не частоту выпадения игрушки(зачем она пользователю вообще???) а какая игрушка выпала из диапазона