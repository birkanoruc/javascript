package javalessons;

public class StringLabs {

	public static void main(String[] args) {
		String str1 = "Hello";
		String str2 = "Hello";
		String str3 = "HELLO";
		
		System.out.println(str1.equals(str2));
		System.out.println(str1.equals(str3));
		System.out.println(str1.equalsIgnoreCase(str3));
		
		System.out.println(str1.indexOf("l"));
		System.out.println(str1.lastIndexOf("l"));
		
		System.out.println(str1 + " " + str2);


	}

}
