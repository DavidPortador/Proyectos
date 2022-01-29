/*
9 - Palindrome Number
Dado un entero x, devuelve verdadero si x es un entero palíndromo.
Un número entero es un palíndromo cuando se lee igual hacia atrás que hacia adelante.
Por ejemplo, 121 es un palíndromo mientras que 123 no lo es.
 
Ejemplo 1:
Entrada: x = 121
Salida: verdadero
Explicación: 121 se lee como 121 de izquierda a derecha y de derecha a izquierda.

Ejemplo 2:
Entrada: x = -121
Salida: falso
Explicación: De izquierda a derecha, se lee -121. De derecha a izquierda, se convierte en 121-. Por lo tanto no es un palíndromo.

Ejemplo 3:
Entrada: x = 10
Salida: falso
Explicación: Lee 01 de derecha a izquierda. Por lo tanto no es un palíndromo.
 
Restricciones:
-231 <= x <= 2^31 - 1
*/

class Solution {

	public static void main(String[] args) {
		Solution obj = new Solution();
		obj.entrada();
	}

	void entrada(){
		System.out.println(isPalindrome(1001));
	}

    public boolean isPalindrome(int x) {
    	boolean solution = false;
        String number = Integer.toString(x);
        String[] aux = number.split("");
        for (int i=0; i<aux.length; i++)
        	if(aux[i].equals(aux[aux.length-(i+1)]))
        		solution = true;
        	else{
        		solution = false;
        		break;
        	}
        return solution;
    }

}


/*
TERMINADO
*/