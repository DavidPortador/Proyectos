#include <iostream>	 //Libreria de entradas y salidas de datos
#include<sstream>  
using namespace std; //Flujo de entrada y salida

//Declaracion de Metodos
void Caracteres();
void Matriz();
void Imprimir(int p_num);
int a_long,a_vm;

int main(){
    cout << "Longitud de la Matriz: \n";
    cin >> a_long;
    Caracteres();
    Matriz();
}
void Caracteres(){
    stringstream v_aux;  
    v_aux<<(a_long*a_long);  
    string v_lg;  
    v_aux>>v_lg;
    a_vm=v_lg.length();
}
void Matriz(){
    int v_aux=0,v_diag=0;
    for (int i = 0; i < a_long; i++){
        for (int j = 0; j < a_long; j++){
            v_aux++;
            //Aqui se imprime
            Imprimir(v_aux);
            if(i==j){
                v_diag+=v_aux;
            }
        }
        cout << "\n";
    }
    cout << "Suma diagonal="<<v_diag<<"\n";
}
void Imprimir(int p_num){
    int v_longitud;
    string v_lg; 
    stringstream v_aux;
    v_aux<<p_num;
    v_aux>>v_lg;
    v_longitud=v_lg.length();
    if((a_vm-v_longitud)==0){
        cout << p_num << " ";
    }else{
        if((a_vm-v_longitud)==1){
            cout << p_num << "  ";
        }else{
            if((a_vm-v_longitud)==2){
                cout << p_num << "   ";
            }else{
                if((a_vm-v_longitud)==3){
                    cout << p_num << "    ";
                }else{
                    if((a_vm-v_longitud)==4){
                        cout << p_num << "     ";
                    }else{
                        if((a_vm-v_longitud)==5){
                        cout << p_num << "      ";
                        }else{
                            cout << p_num;
                        }
                    }

                }
            }
        }
    }
    
}