/*
2 - Add Two Numbers
Se le dan dos listas enlazadas no vacías que representan dos enteros no negativos.
Los dígitos se almacenan en orden inverso y cada uno de sus nodos contiene un solo dígito.
Sume los dos números y devuelva la suma como una lista enlazada.
Puede suponer que los dos números no contienen ningún cero inicial, excepto el propio número 0.

Ejemplo 1:
Entrada: l1 = [2,4,3], l2 = [5,6,4]
Salida: [7,0,8]
Explicación: 342 + 465 = 807.

Ejemplo 2:
Entrada: l1 = [0], l2 = [0]
Salida: [0]

Ejemplo 3:
Entrada: l1 = [9,9,9,9,9,9,9], l2 = [9,9,9,9]
Salida: [8,9,9,9,0,0,0,1]
 
Restricciones:
El número de nodos en cada lista enlazada está en el rango [1, 100].
0 <= Nodo.val <= 9
Se garantiza que la lista representa un número que no tiene ceros a la izquierda.

 * Definition for singly-linked list.
 * public class ListNode {
 *     int val;
 *     ListNode next;
 *     ListNode() {}
 *     ListNode(int val) { this.val = val; }
 *     ListNode(int val, ListNode next) { this.val = val; this.next = next; }
 * }
 */

class Solution {

	public static void main(String[] args) {
		Solution obj = new Solution();
		obj.entrada();
	}

	void entrada(){

		ListNode lista1 = new ListNode();
		lista1.val = 2;
		//System.out.println(lista1.val);
		lista1.next = lista1;
		lista1.val = 4;
		//System.out.println(lista1.val);
		lista1.next = lista1;
		lista1.val = 3;
		//System.out.println(lista1.val);
		lista1.next = null;

		ListNode lista2 = new ListNode();
		lista2.val = 5;
		//System.out.println(lista2.val);
		lista2.next = lista2;
		lista2.val = 6;
		//System.out.println(lista2.val);
		lista2.next = lista2;
		lista2.val = 4;
		//System.out.println(lista2.val);
		lista2.next = null;

		System.out.println(addTwoNumbers(lista1, lista2).val);
	}

    public ListNode addTwoNumbers(ListNode l1, ListNode l2) {
    	ListNode dummyHead = new ListNode(0);
	    ListNode p = l1, q = l2, curr = dummyHead;
	    int carry = 0;
	    while (p != null || q != null) {
	        int x = (p != null) ? p.val : 0;
	        int y = (q != null) ? q.val : 0;
	        int sum = carry + x + y;
	        carry = sum / 10;
	        curr.next = new ListNode(sum % 10);
	        curr = curr.next;
	        if (p != null) p = p.next;
	        if (q != null) q = q.next;
	    }
	    if (carry > 0) {
	        curr.next = new ListNode(carry);
	    }
	    return dummyHead.next;
    }

	public class ListNode {
		int val;
		ListNode next;
		ListNode() {}
		ListNode(int val) { this.val = val; }
		ListNode(int val, ListNode next) { this.val = val; this.next = next; }
	}

}