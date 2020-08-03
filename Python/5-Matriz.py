def main():
    lim = int(input("Limite de la metriz: "))
    aux=0
    for i in range(lim):
        print()
        for j in range(lim):
            aux=aux+1
            print(aux,end=" ")
    print()
main()
