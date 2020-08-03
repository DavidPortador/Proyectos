#include <iostream>	 //Libreria de entradas y salidas de datos
using namespace std; //Flujo de entrada y salida

//Declaracion de Metodos
void Menu(int p_opc);
void Datos();
void Condiciones();
void Ciclos();
void Vectores();
int a_aux; //Atributo universal

//Clase principal
int main(){
	int v_opc;
	cout << "---Menú---\n1)Tipos de datos e impresion\n2)Condiciones\n3)Ciclos\n4)Vectores\n";
	cin >> v_opc;
	Menu(v_opc);
}
//Metodos secundarios
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
		main();
		break;
	}
}
void Datos(){
	//Tipos de datos
	int v_int = 1;
	float v_float = 1.1;
	double v_dob = 1.111111;
	char v_letra = 'a';		 //Guardado de un solo caracter
	string v_letras = "abc"; //tring p_nom, int p_edadTambien funciona "char*"
	//Tipos de impresion
	cout << "\nImpresion sencilla (cout)";
	cout << "\nEntero: " << v_int << "\nFloat: " << v_float << "\nDouble: " << v_dob << "\nCaracter: " << v_letra << "\nTexto: " << v_letras;
	printf("\n\nImpresion complicada (printf)");
	printf("\nEntero: %d\nFloat: %f\nDouble: %f\nCaracter: %c\nTexto: %s\n", v_int, v_float, v_dob, v_letra, v_letras.c_str());
}
void Condiciones(){
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
	//for
	cout << "Contar hasta: ";
	cin >> a_aux;
	for (int i = 1; i <= a_aux; i++){
		cout << i << "\n";
	}
	cout << "¿4+4?\n";
	cin >> a_aux;
	//while
	while (a_aux != 8){
		cout << "no\n";
		cin >> a_aux;
	}
	cout << "si\n";
	//do while
	do{
		cout << "Ingrese un numero menor a 10 ";
		cin >> a_aux;
	} while (10 < a_aux);
}
void Vectores()
{
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