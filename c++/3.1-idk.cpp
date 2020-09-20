#include<iostream>
#include <cstdlib>
using namespace std;

// Declaracion de metodos y atributos
int valiEntero(string p_dato);
bool validacion(string p_dato);

int main(){
    int v_num;
    v_num = valiEntero("Ingrese un dato entero: ");
    return 0;
}
int valiEntero(string p_dato){
    string v_dato;
    while(true){
        cout << p_dato;
        cin >> v_dato;
        if(validacion(v_dato))
            break;
        else
            cout << "error" << "\n";
    }
    return atoi(v_dato.c_str());
}
bool validacion(string p_dato) {
   int v_num = p_dato[0] == '-';
   for(int i=v_num; i<p_dato.size(); i++)// No se usan llaves por la regla de la cadena
      if('0' <= p_dato[i] && p_dato[i] <= '9')
            continue;
      else
         return false;
   return true;
}