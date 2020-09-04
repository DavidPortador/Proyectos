#include <iostream> //Componente para operaciones de entrada/salida de datos
using namespace std; //Componente para flujo de entrada y salida

    //Metodos
    void Crear(int med);

    int main(){
        int med;
        cout << "Ingrese la medida: ";
        cin >> med;
        Crear(med);
    }
    void Crear(int med){
        int esp;
        esp = med-1;
        cout << "med: " << med << "\nesp: " << esp << "\n";
        for (int i = 0; i < med; i++){
            for (int j = 0; j < esp; j++)
            {
                cout << " ";
            }
            esp--;
            for (int k = 1; k < (med-esp); k++)
            {
                cout << "* ";
            }
            cout << "\n";
        }
        
    }
