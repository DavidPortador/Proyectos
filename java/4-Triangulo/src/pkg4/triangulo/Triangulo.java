package pkg4.triangulo;

import java.util.Scanner;

public class Triangulo {

    public static void main(String[] args) {
        Triangulo v_obj = new Triangulo();
        v_obj.Leer();
    }

    void Leer() {
        Scanner v_tec = new Scanner(System.in);
        int v_med;
        System.out.println("Ingrese la medida: ");
        try {
            v_med = v_tec.nextInt();
            Crear(v_med);
        } catch (Exception e) {
            //System.out.println("La medida debe ser numerica");
            v_tec = new Scanner(System.in);
            Leer();
        }
    }

    void Crear(int p_med) {
        int v_esp, v_cont, v_cont2, v_cont3;
        v_esp = p_med - 1;
        System.out.println("med: " + p_med + "\nesp: " + v_esp);
        //for para la altura y *
        for (v_cont = 0; v_cont < p_med; v_cont++) {
            //for para los espacios
            for (v_cont2 = 0; v_cont2 < v_esp; v_cont2++) {
                System.out.print(" ");
            }
            v_esp--;
            for (v_cont3 = 1; v_cont3 < (p_med - v_esp); v_cont3++) {
                System.out.print("* ");
            }
            System.out.println("");
        }
    }
}
