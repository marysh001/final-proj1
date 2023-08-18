package automat;

public class Toys {


public class Toy <E> implements Iterable {
    private String name;
    private Number percent;
    private List<Toy> toylist;
    private Human spouse;


    public Toy (String name, Number percent,
     Toy doll, Toy robot, Toy puzzle) {
        this.name = name;
        this.percent = percent;
        this.id = id;
       
        toylist = new ArrayList<>();
        if (doll != null){
            toylist.add(doll);
        }
        if (robot != null){
            toylist.add(robot);
        } 
        if (puzzle != null){
            toylist.add(puzzle);
        } 

    public String getName(){ return name; }
   
    }
    public Number getPercent() { return percent; }
    public Number getId() { return id; }
    

  
public List<Toy> getToylist() { return toylist; }


public void setPercent(Number percent){ this.percent= percent; }


@Override
public String toString() { return getInfo(); }
public String getInfo(){
    StringBuilder sb = new StringBuilder();
    sb.append("имя: ");
    sb.append(name);
    sb.append(", процент выпадения игрушки: ");
    sb.append(getPercent());
    sb.append(",");
    sb.append(", все игрушки: ");
    sb.append(getToylist());
    return sb.toString();

}
}
}