"""
Notas del lenguaje:
1 En este lenguaje todas las salidas deben de 
ser string
2 No hay ;
3 Es MUY importante tener alineado el codigo
4 No exite "switch", "do while" (se simulan)
"""
#Clase principal
def Main():
    print("Menu")
    print("1)Tipos de datos")
    print("2)Condiciones")
    print("3)Ciclos")
    print("4)Vectores")
    opc = int(input("Digame su opc: "))
    Menu(opc)

#Menu
def Menu(p_opc):
    #Simula un switch
    if p_opc < 5 and p_opc > 0:
        if p_opc == 1:
            Datos()
        if p_opc == 2:
            Condiciones()
        if p_opc == 3:
            Ciclos()
        if p_opc == 4:
            Vectores()
    #Se simula el default de un switch con else
    else:
        print("Opcion no valida")

#Tipos de datos e impresion
def Datos():
    #Entero
    num = 20
    #String
    texto = "abcd"
    #float
    dec = 20.5
    #Tipos de impresion
    print("\nTexto: "+texto+"\nEntero: "+str(num)+"\nFloat: "+str(dec))
#Ciclos
def Condiciones():
    #If
    opc = int(input("Cuanto es 3+3\n"))
    if opc == 6:
        print("Simon xd\n")
    else:
        print("nelson xd\n")
#Ciclos
def Ciclos():
    #for
    opc = int(input("Contar hasta: "))
    for i in range(opc):
        print(i+1)
    #while
    res = int(input("5+5 "))
    while res!=10:
        print("no")
        res = int(input("5+5 "))
    print("Siiiuuuu")
    #simulacion de do while
    ban=True
    while ban==True:
        num = int(input("Ingrese un numero menor a 10: "))
        if num<10:
            ban=False
    print("correcto")
#Vectores
def Vectores():
    #Listas
    lista = []
    lista.insert(0,"Lista")
    can = int(input("Longitud de la lista: "))
    for i in range(can):
        aux = input(str(i+1)+": ")
        lista.append(aux)
    print(lista)
    #Tuplas
    tup = ("Tupla",1,2,3,4,5)
    print("Una tupla es un conjunto de datos que no se puede modificar\n"+str(tup))
    #Diccionario
    dicc = {"Nombre":"David","Apellido":"Portador"}
    print(dicc)
    
#Correr el programa desde la clase principal
Main()