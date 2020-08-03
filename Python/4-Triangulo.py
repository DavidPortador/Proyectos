def main():
    med = int(input("Medida: "))
    crear(med)
def crear(med):
    esp = med-1
    print("med: "+str(med)+"\nesp: "+str(esp))
    for i in range(med):
        #for para espacios
        for j in range(esp):
            print(" ",end="")
        print("* "*(med-esp))
        esp=esp-1
main()