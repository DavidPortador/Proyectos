def main():
   v_valor = int(input("Valor: "))
   imprimir(v_valor)
def imprimir(p_valor):
    v_opc=int(input("1)Imprimir serie hasta "+str(p_valor)+"\n2)Imprimir X("+str(p_valor)+")\nopc: "))
    if(v_opc==1):
        for i in range(p_valor):
            print("X("+str(i+1)+")=",end="")
            serie(i+1)
    else:
        if(v_opc==2):
            print("X("+str(p_valor)+")=",end="")
            serie(p_valor)
def serie(p_opc):
        print((p_opc*(p_opc+1))/2)
#Ejecutable
main()