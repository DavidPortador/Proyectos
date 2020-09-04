#include <iostream> //Componente para operaciones de entrada/salida de datos
#include <sstream>  //Componente para transformar tipos de datos
using namespace std; //Componente para flujo de entrada y salida

//Metodos y atributos
void calculos(int p_valor);
void menu(int p_valor);

int main(){
    int v_valor;
    string v_aux;
    while(true) {
        cout << "Introduce un valor: ";
        getline(cin, v_aux);
        stringstream mystream(v_aux);
        if(mystream >> v_valor){
            break;
        }else{
            cout << "Error, valor no numerico\n";
        }
    }
    menu(v_valor);
}

void menu(int p_valor){
    int v_opc;
    cout << "1)Imprimir serie hasta X("<<p_valor<<")\n2)Mostrar solo X("<<p_valor<<")\n";
    cin >> v_opc;
    if (v_opc==1){
        for (int i=1; i<=p_valor; i++){
            calculos(i);
        }
    }else{
        if(v_opc==2){
            calculos(p_valor);
        }else{
            cout << "Opcion no valida\n";
        }
    }
}
void calculos(int p_valor){
    int v_resul;
    v_resul = (p_valor*(p_valor+1))/2;
    cout << "X(" << p_valor << ")=" << v_resul << "\n";
}