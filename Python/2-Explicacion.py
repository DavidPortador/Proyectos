"""
Notas del lenguaje:
1 En este lenguaje todas las salidas deben de 
ser string
2 No hay ;
3 Es MUY importante tener alineado el codigo
4 No exite "switch", "do while" (se simulan)
"""
# Validacion para numeros enteros
def valiEntero(p_texto):
    while(True):
        try:
            num = int(input(p_texto))
            break
        except ValueError:
            print('Error, no es entero')
    return num
# Clase principal
def Main():
    print("Menu")
    print("1)Tipos de datos")
    print("2)Condiciones")
    print("3)Ciclos")
    print("4)Vectores")
    print("5)Salir")
    Menu()

# Menu
def Menu():
    opc = valiEntero("opc: ")
    # Simula un switch
    if opc < 6 and opc > 0:
        if opc == 1:
            Datos()
        if opc == 2:
            Condiciones()
        if opc == 3:
            Ciclos()
        if opc == 4:
            Vectores()
        if opc == 5:
            exit()
    # Se simula el default de un switch con else
    else:
        print("Opcion no valida")
        Menu()

# Tipos de datos e impresion
def Datos():
    # Entero
    num = 20
    # String
    texto = "abcd"
    # Float
    dec = 20.5
    # Impresion
    print("\nTexto: "+texto+"\nEntero: "+str(num)+"\nFloat: "+str(dec))

# Ciclos
def Condiciones():
    # If
    opc = valiEntero("¿3+3? ")
    if opc == 6:
        print("Correcto\n")
    else:
        print("Incorrecto\n")
# Ciclos
def Ciclos():
    # For
    opc = valiEntero("Contar hasta: ")
    for i in range(opc):
        print(i+1)
    # While
    res = valiEntero("¿5+5?")
    while res!=10:
        print("no")
        res = valiEntero("¿5+5?")
    print("Correcto")
    # Simulacion de do while
    ban=True
    while ban==True:
        num = int(input("Ingrese un numero menor a 10: "))
        if num<10:
            ban=False
    print("correcto")
# Vectores
def Vectores():
    # Listas
    lista = []
    lista.insert(0,"Lista")
    can = int(input("Longitud de la lista: "))
    for i in range(can):
        aux = input(str(i+1)+": ")
        lista.append(aux)
    print(lista)
    # Tuplas
    tup = ("Tupla",1,2,3,4,5)
    print("Una tupla es un conjunto de datos que no se puede modificar\n"+str(tup))
    # Diccionario
    dicc = {"Nombre":"David","Apellido":"Portador"}
    print(dicc)
    
# Correr el programa desde la clase principal
Main()