def main():
    lim = int(input("Limite de la serie: "))
    Calculos(lim)
def Calculos(lim):
    izq,der,sum = 0,1,1
    for i in range(lim):
        sum=izq+der
        print(str(i+1)+")"+str(izq)+"+"+str(der)+"="+str(sum))
        izq=der
        der=sum
main()