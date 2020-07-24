package matriz;
import java.util.Scanner;

public class Matriz {
    
    Scanner a_teclado = new Scanner(System.in);
    int a_long;
    
    public static void main(String[] args) {
        Matriz v_objeto = new Matriz();
        v_objeto.m_ingrLongitud();
    }
    void m_ingrLongitud(){
        System.out.println("Ingresa la longitud de la Matriz");
        try {
            a_long=a_teclado.nextInt();
            m_crearMatriz();
        } catch (Exception e) {
            System.out.println("Ingrese un valor valido");
            a_teclado = new Scanner(System.in);
            m_ingrLongitud();
        }
    }
    void m_crearMatriz(){
        int v_cont,v_cont2,v_aux,v_diagInicial=0,v_diagFinal=0;
        v_aux=0;
        for (v_cont = 0; v_cont < a_long; v_cont++) {
            for (v_cont2 = 0; v_cont2 < a_long; v_cont2++) {
                v_aux++;
                if(v_cont2==v_cont){
                    v_diagInicial+=v_aux;
                }
                if(v_cont2==(a_long-v_cont)){
                    v_diagFinal+=v_aux;
                }
                System.out.print(v_aux+" ");
            }
            System.out.println();
            v_aux--;
        }
        System.out.println("Diagonal Inicial: "+v_diagInicial);
        System.out.println("Diagonal Final:   "+(v_diagFinal+1));
    }
}
