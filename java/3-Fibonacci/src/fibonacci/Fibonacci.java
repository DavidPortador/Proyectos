package fibonacci;

import java.util.Scanner;

public class Fibonacci {

    public static void main(String[] args) {
        Fibonacci v_fbnc = new Fibonacci();
        v_fbnc.m_solicitar();
    }

    void m_solicitar() {
        Scanner v_tec = new Scanner(System.in);
        int v_opc;
        System.out.println("Ingrese el limite: ");
        try {
            v_opc = v_tec.nextInt();
            m_calcular(v_opc);
        } catch (Exception e) {
            System.out.println("Selecciona una entrada numerica");
            v_tec = new Scanner(System.in);
            m_solicitar();
        }
    }

    void m_calcular(int p_opc) {
        int v_cont, v_izq = 0, v_der = 1, v_suma = 1;
        for (v_cont = 0; v_cont < p_opc; v_cont++) {
            v_suma = v_izq + v_der;
            System.out.println((v_cont + 1) + ")" + v_izq + "+" + v_der + "=" + v_suma);
            v_izq = v_der;
            v_der = v_suma;
        }
    }
}
