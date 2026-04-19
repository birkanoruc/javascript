package javalessons;

public class StaticElements {

	static int i = 10;
	int y = 15;
	
	static int z;
	
	static {
		z = 20;
	}
	
	public static void main(String[] args) {
		System.out.println(i);
		
		StaticElements staticElements = new StaticElements();
		System.out.println(staticElements.y);
		
		System.out.println(z);

	}

}
