/*
1 - Two Sum
Dada una matriz de números enteros y un objetivo entero, 
devuelve índices de los dos números de modo que sumen el objetivo.
Puede suponer que cada entrada tendría exactamente una solución 
y no puede usar el mismo elemento dos veces.
Puede devolver la respuesta en cualquier orden.

Ejemplo 1:
Entrada: números = [2,7,11,15], objetivo = 9
Salida: [0,1]
Explicación: Como nums[0] + nums[1] == 9, devolvemos [0, 1].

Ejemplo 2:
Entrada: números = [3,2,4], objetivo = 6
Salida: [1,2]

Ejemplo 3:
Entrada: números = [3,3], objetivo = 6
Salida: [0,1]
 
Restricciones:
2 <= números.longitud <= 10^4
-109 <= números[i] <= 10^9
-109 <= objetivo <= 10^9
Sólo existe una respuesta válida.
*/

class Solution {

    public static void main(String[] args) {
        Solution obj = new Solution();
        obj.entrada();
    }

    void entrada(){
        int[] aux = {2,7,11,15};
        int[] num = twoSum(aux, 9);
        for (int i=0; i<num.length; i++) {
            System.out.println(num[i]);
        }
    }

    public int[] twoSum(int[] nums, int target) {
        int[] solution = new int[2];
        // Se crean dos ciclos para combinar todos los datos
        for (int i=0; i<nums.length; i++) {
            for(int j=0; j<nums.length; j++){
                // Valida que no se sume un numero consigo mismo
                if(i!=j){
                    // Valida que la suma sea correcta y guada los datos
                    if(nums[i]+nums[j]==target){
                        solution[0]=j;
                        solution[1]=i;
                    }
                }
            }
        }
        // Retorna el arreglo con 
        return solution;
    }
}


/*
TERMINADO
*/