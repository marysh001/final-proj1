import java.util.ArrayList;
import java.util.List;

public class Toylist  {
    private int id;
    private int productId;
    private List<Product> productList;

    public Toylist(int id) {
        this.id = id;
        productList = new ArrayList<>();
    }

    public void addProduct(Product product){
        product.setId(productId++);
        productList.add(product);
    }

    public String getProductsInfo(){
        StringBuilder stringBuilder = new StringBuilder();
        stringBuilder.append("Список игрушек:\n");
        for (Product product: productList){
            stringBuilder.append(product);
            stringBuilder.append("\n");
        }
        return stringBuilder.toString();
    }
}
    

