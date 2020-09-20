// En c++ y Java se pueden o no usar "{}" en los ciclos por la regla de la cadena

#include <iostream> //Componente para operaciones de entrada/salida de datos
using namespace std; //Componente para flujo de entrada y salida

//Declaracion de Metodos a explicar
int Validar(string p_texto);
void Menu(int p_opc);
void Datos();
void Condiciones();
void Ciclos();
void Vectores();
int a_aux; //Atributo universal

// Validar dato entero
int Validar(string p_texto){
	char dato[10];
    int v_num;
    do{
    	cout<<p_texto;
		cin>>dato;
    	v_num=atoi(dato);
		cout << "El dato no es entero\n";
	}while(v_num==0);
    cout<< "numero:"<<v_num<<"\n";
	return v_num;
}
// Clase principal
int main(){
	int v_opc;
	cout << "---Menú---\n1)Tipos de datos e impresion\n2)Condiciones\n3)Ciclos\n4)Vectores\n";
	v_opc = Validar("");
	Menu(v_opc);
}
// Metodos secundarios
void Menu(int p_opc){
	switch (p_opc){
	case 1:
		Datos();
		break;
	case 2:
		Condiciones();
		break;
	case 3:
		Ciclos();
		break;
	case 4:
		Vectores();
		break;
	default:
		Validar("Opcion incorrecta, elige otra opcion: ");
		break;
	}
}

void Datos(){
	// Tipos de datos
	int v_int = 1;
	float v_float = 1.1;
	double v_dob = 1.111111;
	char v_letra = 'a'; // Guardado de un solo caracter
	bool v_bool = true; // El dato no es necesario imprimirlo
	string v_letras = "abc"; // Otra forma es char* v_letras
	// Tipos de impresion
	cout << "\nImpresion sencilla (cout)";
	cout << "\nEntero: " << v_int << "\nFloat: " << v_float << "\nDouble: " << v_dob << "\nCaracter: " << v_letra << "\nTexto: " << v_letras;
	printf("\n\nImpresion complicada (printf)");
	printf("\nEntero: %d\nFloat: %f\nDouble: %f\nCaracter: %c\nTexto: %s\n", v_int, v_float, v_dob, v_letra, v_letras.c_str());
}
void Condiciones(){
	// Desiciones de verdadero y falso (booleano)
	cout << "¿Cuánto es 2 + 2?\n";
	cin >> a_aux;
	if (a_aux == 4){
		cout << "simon xd\n";
	}
	else{
		cout << "nelson :c\n";
	}
}
void Ciclos(){
	// For
	cout << "Contar hasta: ";
	cin >> a_aux;
	for (int i = 1; i <= a_aux; i++){
		cout << i << "\n";
	}
	cout << "¿4+4?\n";
	cin >> a_aux;
	// While
	while (a_aux != 8){
		cout << "no\n";
		cin >> a_aux;
	}
	cout << "si\n";
	// Do while
	do{
		cout << "Ingrese un numero menor a 10 ";
		cin >> a_aux;
	} while (10 < a_aux);
}
void Vectores(){
	cout << "Longitud del vector: ";
	cin >> a_aux;
	string v_vector[a_aux];
	string v_aux;
	for (int i = 0; i < a_aux; i++){
		cout << "Dato" << i + 1 << ": ";
		cin >> v_aux;
		v_vector[i] = v_aux;
	}
	for (int j = 0; j < a_aux; j++){
		cout << v_vector[j] << "\n";
	}
}