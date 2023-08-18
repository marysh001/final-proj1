

public class random {
public static <T> T getRandomListElement(toylist <T> items) {
    return items.get(ThreadLocalRandom.current().nextInt(items.size()));
}
}
//мысль такова, сделать просто рандомайзер, который выкидывает игрушку по id случайно и записывает эту игрушку в файл, 
//записывать не частоту выпадения игрушки(зачем она пользователю вообще???) а какая игрушка выпала из диапазона
// процент выпадения вбивает сам пользователь