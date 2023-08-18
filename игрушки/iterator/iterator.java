package automat;

import automat.toy.Toy;

import java.util.Iterator;
import java.util.List;

public class ToyIterator implements Iterator <Toy>{
    private int index;
    private List<Toy> toyList;

    public ToyIterator(List<Toy> toyList){
        this.toyList = toyList;
    }

    @Override
    public boolean hasNext() { return index < toylist.size();}
    @Override 
    public Toy next() {return toylist.get(index++);}
}

public class automat {
    private list<Toy> toyList;

    public automat (List<Toy> toyList)
    this.toyList = toyList;

StringBuilder sb = new StringBuilder();
sb.append("В автомате");
sb.append(humanList.size());
sb.append("игрушек: \n");
for (Toy toy: toyList){
    sb.append(toy);
    sb.append("\n");
}

return sb.toString();

@Override
public String toString() {return getInfo();}

@Override
public Iterator <Toy> Iterator() {return new ToyIterator(HumanList);}

public void sortByName(){
    humanList.sort(new ToyComparatorByName());
}
}