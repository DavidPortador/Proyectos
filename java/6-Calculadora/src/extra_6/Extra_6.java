package extra_6;
import java.util.Scanner;

public class Extra_6 {
    //Son atributos porque se usan en varios metodos
    //**Las variables solo se usan en el mismo metodo
    Scanner a_teclado = new Scanner(System.in);
    int a_opc,a_valor1,a_valor2;
    
    public static void main(String[] args) {
        Extra_6 v_objeto = new Extra_6();
        v_objeto.m_menu();
    }
    void m_menu(){
        System.out.println("---Calculadora de Enteros---\n1)Sumar");
        System.out.println("2)Restar");
        System.out.println("3)Dividir");
        System.out.println("4)Multiplicar");
        m_opcion();
    }
    void m_agregar(){
        System.out.println("Valor 1: ");
        a_valor1=a_teclado.nextInt();
        System.out.println("Valor 2: ");
        a_valor2=a_teclado.nextInt();
    }
    void m_opcion(){
        sumayresta v_sumres = new sumayresta();
        divymulti v_divmul = new divymulti();
        try{
            System.out.print("Opción: ");
            a_opc=a_teclado.nextInt();
            switch(a_opc){
                case 1: m_agregar();
                        System.out.println("Suma= "+v_sumres.m_suma(a_valor1,a_valor2));
                        break;
                case 2: m_agregar();
                        System.out.println("Resta= "+v_sumres.m_resta(a_valor1,a_valor2));
                        break;
                case 3: m_agregar();
                        System.out.println("Division= "+v_divmul.m_div(a_valor1,a_valor2));
                        break;
                case 4: m_agregar();
                        System.out.println("Multiplicacion= "+v_divmul.m_multi(a_valor1,a_valor2));
                        break;
                default:System.out.println("No existe esa opcion");
                        m_opcion();
                        break;
            }
        }catch(Exception e){
            //Llega cuando se ingresa un valor no numerico.
            System.out.println("Ingrese un valor numerico");
            //Se vuelve a crear el objeto porque la excepcion lo daño.
            a_teclado = new Scanner(System.in);
            //Genera un ciclo sin usar ciclos OMG
            m_opcion();
        }
    }
}
