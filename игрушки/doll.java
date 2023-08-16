
    public class doll  extends Product {
   
        private double chance;
    
        public Doll(String name, int id, double chance) {
            super(name, id);
            this.chance = chance;
        }
    
        public double getChance() {
            return chance;
        }
    
        @Override
        public String toString() {
            return super.toString() + ", chance: " + chance ;
        }
}
