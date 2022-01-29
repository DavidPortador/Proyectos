/*
13 - Roman to Integer
Los números romanos están representados por siete símbolos diferentes: I, V, X, L, C, D y M.

Valor del símbolo
I 1
V 5
X 10
L 50
C 100
D 500
M 1000

Por ejemplo, 2 se escribe como II en números romanos, solo se suman dos unos. 
12 se escribe como XII, que es simplemente X + II. 
El número 27 se escribe como XXVII, que es XX + V + II.
Los números romanos generalmente se escriben de mayor a menor de izquierda a derecha. 
Sin embargo, el numeral para cuatro no es IIII. 
En cambio, el número cuatro se escribe como IV. 
Como el uno está antes que el cinco lo restamos haciendo cuatro.
El mismo principio se aplica al número nueve,
que se escribe como IX. Hay seis casos en los que se usa la resta:
Puedo colocarme antes de V (5) y X (10) para hacer 4 y 9.
X se puede colocar antes de L (50) y C (100) para hacer 40 y 90.
C se puede colocar antes de D (500) y M (1000) para hacer 400 y 900.
Dado un número romano, conviértelo en un número entero.

Ejemplo 1:
Entrada: s = "III"
Salida: 3
Explicación: III = 3.

Ejemplo 2:
Entrada: s = "LVIII"
Salida: 58
Explicación: L = 50, V= 5, III = 3.

Ejemplo 3:
Entrada: s = "MCMXCIV"
Salida: 1994
Explicación: M = 1000, CM = 900, XC = 90 y IV = 4.
 
Restricciones:
1 <= s.longitud <= 15
s contiene solo los caracteres ('I', 'V', 'X', 'L', 'C', 'D', 'M').
Se garantiza que s es un número romano válido en el rango [1, 3999].
*/

class Solution {

	public static void main(String[] args) {
		Solution obj = new Solution();
		obj.entrada();
	}

	void entrada(){
		System.out.println(romanToInt("III"));
	}

    public int romanToInt(String s) {
    	return 0;
    }
}