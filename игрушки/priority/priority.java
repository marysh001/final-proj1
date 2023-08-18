package automat;
 
import java.util.Comparator;
import java.util.PriorityQueue;
import java.util.Queue;
import java.util.Random;
 
public class PriorityQueueExample {
 
    public static void main(String[] args) {
         
        Queue<Integer> integerPriorityQueue = new PriorityQueue<>(4);
        Random rand = new Random();
        for(int i=0; i<4; i++){
            integerPriorityQueue.add(new Integer(rand.nextInt(4)));
        }
        for(int i=0;i<4;i++){
            Integer in = integerPriorityQueue.poll();
            System.out.println("Обрабатываем:"+in);
        }

        Queue<Toy> toyPriorityQueue = new PriorityQueue<>(4, idComparator);
        addDataToQueue(ToyPriorityQueue);
         
        pollDataFromQueue(toyPriorityQueue);
         
    }
     
    public static Comparator<Toy> idComparator = new Comparator<Toy>(){
         
        @Override
        public int compare(Toy t1, Toy t2) {
            return (int) (t1.getId() - t2.getId());
        }
    };
 
    private static void addDataToQueue(Queue<Toy> customerPriorityQueue) {
        Random rand = new Random();
        for(int i=0; i<4; i++){
            int id = rand.nextInt(100);
            customerPriorityQueue.add(new Toy(id, "конструктор "+id));
        }
    }
     
    private static void pollDataFromQueue(Queue<Toy> toyPriorityQueue) {
        while(true){
            Toy toi = ToyPriorityQueue.poll();
            if(toi == null) break;
            System.out.println("id выпавшей игрушки" + toi.getId());
        }
    }
 
}