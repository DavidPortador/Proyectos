#include <iostream>	 //Libreria de entradas y salidas de datos
using namespace std; //Flujo de entrada y salida

//Declaracion de Metodos
void Menu();

class Calculos{
public:
    void Sumas(int p_cant);
    void Restas(int p_cant);
};
void Calculos::Sumas(int p_cant){
    int v_vector[p_cant];
    int v_suma;
    for (int i = 0; i < p_cant; i++){
        cout << "Cantidad " << i+1 << ": " ;
        cin >> v_vector[i];
    }
    for (int j = 0; j < p_cant; j++){
        v_suma+=v_vector[j];
    }
    cout << "La suma es: " << v_suma << "\n";
}
void Calculos::Restas(int p_cant){
    int v_vector[p_cant];
    int v_resta;
    for (int i = 0; i < p_cant; i++){
        cout << "Cantidad " << i+1 << ": " ;
        cin >> v_vector[i];
    }
    v_resta=v_vector[0];
    for (int j = 1; j < p_cant; j++){
        v_resta-=v_vector[j];
    }
    cout << "La Resta es: " << v_resta << "\n";
}

int main(){
    cout << "Opciones:\n1)Suma\n2)Resta\n3)Multiplicacion\n4)Division\n";
    Menu();
}

void Menu(){
    int v_opc,v_aux;
    cin>>v_opc;
    Calculos v_obj;
    switch (v_opc){
    case 1:
        cout << "¿Cuantos valores sumara?\n";
        cin>>v_aux;
        v_obj.Sumas(v_aux);
        break;
    case 2:
        cout << "¿Cuantos valores restara?\n";
        cin>>v_aux;
        v_obj.Restas(v_aux);
        break;
    default:
        cout << "Elige una opcion valida\n";
        Menu();
        break;
    }
    
}