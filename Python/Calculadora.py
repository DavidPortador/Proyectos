mn = "--Menu--\n1)Suma\n2)Resta\n3)Multiplicacion\n4)Division"
print(mn)
#main
def main():
    opc = int(input("Opcion: "))
    menu(opc)
def menu(opc):
    #simulacion de un switch
    if opc>0 and opc<5:
        if opc==1:
            can = int(input("cantidad de valores a sumar :"))
            suma(can)
        if opc==2:
            print("resta")
        if opc==3:
            print("multi")
        if opc==4:
            print("div")
    else:
        print("Elija una opcion valida")
        main()
def suma(can):
    sum=0
    for i in range(can):
        aux = int(input(str(i+1)+")"))
        sum+=aux
    print("la suma es: "+str(sum))
def resta(can):
    res=0
    for i in range(can):
        aux = int(input(str(i+1)+")"))
        sum+=aux
    print("la suma es: "+str(sum))
#ejecucion
main()