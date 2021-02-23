package holamundo;

public class HolaMundo {

    String a_texto = "Hola Mundo";

	public static void main(String[] args) {
		HolaMundo v_obj = new HolaMundo();
		System.out.println("Hola Mundo -> Directa");
		System.out.println(v_obj.f_get() + " -> Funcion");
		v_obj.m_imprimir();
		v_obj.m_imprimirp(v_obj.a_texto);
	}

	void m_imprimir(){
		System.out.println(a_texto + " -> Metodo");
	}

	void m_imprimirp(String p_texto){
		System.out.println(p_texto + " -> Metodo con paramatro");
	}

	String f_get(){
		String v_texto = "Hola Mundo";
		return v_texto;
	}
}
