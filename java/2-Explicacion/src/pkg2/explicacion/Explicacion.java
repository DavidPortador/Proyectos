package pkg2.explicacion;

/*
    tipos de datos, caracteres (atributos, variables, parametros)
    metodos, funciones
    condiciones
    ciclos, arreglos, excepciones
    leer datos, numeros random, operaciones + JUEGO
 */

public class Explicacion {

    String a_ejemplo = "Todos los metodos de la clase lo pueden usar";

    public static void main(String[] args) {
        Explicacion v_obj = new Explicacion();
        v_obj.m_tipodatos_caracteres("Informacion incluida al llamar un metodo");
        v_obj.m_condicion();
        v_obj.m_ciclos_arreglo_excepcion();
    }

    void m_tipodatos_caracteres(String p_ejemplo) {
        String v_ejemplo = "Solo se puede usar en este metodo";
        System.out.println("Esto es un metodo:\n -> Ejecuta los pocesos existentes\n");
        System.out.println("Esto es una funcion:\n -> " + f_devTexto());
        // NOTA cualquier tipo de dato u objeto puede representar un arreglo
        // Poner lo que pesan en bites
        System.out.println("~ Tipos de Datos ~");
        System.out.println("    byte, short\n   -> ");
        System.out.println("    int, long\n   -> Valor numerico sin punto decimal");
        System.out.println("   -> Valor numerico muy grande(2⁶³)");
        System.out.println("    String (objeto)\n   -> ");
        System.out.println("    float, double\n   -> ");
        
        System.out.println("~ Tipos de caracteres ~");
        System.out.println("    Esto es un atributo\n   -> " + a_ejemplo);
        System.out.println("    Esto es una variable\n   -> " + v_ejemplo);
        System.out.println("    Esto es una parametro\n   -> " + p_ejemplo);
        
        System.out.println("");
    }

    String f_devTexto() {
        return "Devuelve el tipo de dato con el que es declarada\n";
    }
    
    void m_condicion(){
        boolean v_bandera = true;
        System.out.print("Esto es una condicion:\n -> ");
        if (v_bandera) {
            System.out.print("Valida un dato o comparacion para entrar a la condicion ");
        }else if(v_bandera == true){
            System.out.print("Vardadera o falsa");
        }else{
            // No entra a la condicion
        }
        System.out.println("\n");
    }
    void m_ciclos_arreglo_excepcion(){
        String v_texto[] = {"Guarda","cierta","cantidad","de","datos"};
        System.out.print("Esto es un arreglo, impreso con un ciclo:\n -> ");
        for (int v_iterador = 0; v_iterador < v_texto.length; v_iterador++) {
            System.out.print(v_texto[v_iterador] + " "); // Sobra espacio al final
        }
        System.out.println("");
        System.out.print(" -> Imprime cada elemento que haya dentro");
        System.out.println("\n");
        // Se ejecutan acciones y se valida si alguna de ellas falla o se cicla
        System.out.print("Esto es una excepcion:\n -> ");
        try {
            String v_aux = v_texto[-1]; // No existe la posicion
        } catch (Exception e) {
            System.out.println("Error logico al ejecutar una accion imposible o bucle infinito");
        }
    }
    void f_leer_random_operaciones(){
        int v_numAleatorio;
        System.out.println("~ Juego de Adivinar ~");
        v_numAleatorio = (int) Math.random() * 9 + 1;
        
    }
}
