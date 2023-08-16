
public class Product {
    private int id;
    private String name;
    private double price;

    public Product(String name, double chance) {
        this.name = name;
        this.chance = chance;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getName() {
        return name;
    }

    public double getChance() {
        return chance;
    }

    public void setChance(double chance) {
        this.chance = chance;
    }

    @Override
    public String toString() {
        return "id: " + id + ", name: " + name + ", chance: " + chance;
    }
}