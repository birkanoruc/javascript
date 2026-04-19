package javalessons;

import java.util.Arrays;

public class ArrayLabs {
	public static void main(String[] args) {
		int[] numbers = new int[4];
		numbers[0] = 5;
		numbers[1] = 10;
		numbers[2] = 15;
		numbers[3] = 20;
		
		System.out.println(numbers.length);
		System.out.println(Arrays.toString(numbers));
		
		int total = 0;
		
		for(int i = 0; i<numbers.length; i++)
		{
			total += numbers[i];
		}
		System.out.println(total);

	}
}
