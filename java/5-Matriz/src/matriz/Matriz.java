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
        int v_max,v_cont,v_cont2,v_cont3,v_aux=0,v_diagInicial=0,v_diagFinal=0;
        v_max = (a_long*a_long);
        String v_maxs = v_max+"";
        v_max=v_maxs.length();
        System.out.println("MAXIMO: "+v_max);
        for (v_cont = 0; v_cont < a_long; v_cont++) {
            for (v_cont2 = 0; v_cont2 < a_long; v_cont2++) {
                v_aux++;
                if(v_cont2==v_cont){
                    v_diagInicial+=v_aux;
                }
                if(v_cont2==(a_long-v_cont)){
                    v_diagFinal+=v_aux;
                }
                //Aqui se alinean
                if(((v_aux+"").length())!=1){
                System.out.print(v_aux);
                }else{
                    System.out.print(v_aux+" ");
                }
                for(v_cont3 = 0; v_cont3 < v_max; v_cont3++){
                    System.out.print(" ");
                }
                
            }
            System.out.println();
        }
        System.out.println("Diagonal Inicial: "+v_diagInicial);
        System.out.println("Diagonal Final:   "+(v_diagFinal+1));
    }
}
