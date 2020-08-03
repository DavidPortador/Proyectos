#include <iostream>	 //Libreria de entradas y salidas de datos
using namespace std; //Flujo de entrada y salida

//Declaracion de Metodos
void Calculos(int p_opc);

int main(){
    int v_opc;
	cout << "Limite de la serie: ";
	cin >> v_opc;
    Calculos(v_opc);
}
void Calculos(int p_opc){
    int v_suma=0,v_izq=0,v_der=1;
    for(int i=0;i<p_opc;i++){
        v_suma=v_izq+v_der;
        cout << v_izq << "+" << v_der << "=" << v_suma << "\n";
        v_izq=v_der;
        v_der=v_suma;
    }
}