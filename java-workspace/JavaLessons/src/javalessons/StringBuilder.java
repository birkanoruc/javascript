package javalessons;

import java.util.Scanner;

public class StringBuilder {

	public static void main(String[] args) {
		Scanner scanner =  new Scanner(System.in);
		StringBuffer buffer = new StringBuffer();
		System.out.print("Adınız: ");
		buffer.append(scanner.nextLine());
		System.out.print("Soyadınız: ");
		buffer.append(scanner.nextLine());
		
		System.out.println(buffer.toString());

	}
}
