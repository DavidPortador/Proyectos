#Complementos necesarios
from tkinter import *
import random
import time 
#Clase principal
def main():
    cont=10
    for i in range(15):
        if i!=1:
            #color : fill=''
            canvas.create_rectangle(10,cont,50,50)
            cont2=10
            for j in range(11):
                if j!=1:
                    canvas.create_rectangle(cont2,cont,50,50)
                #canvas.create_text(cont2, cont, text=str(j)+","+str(i), fill='white')
                cont2+=40
        cont+=40
    canvas.create_text(210, 585, text='<Izquierda: j> <Derecha: l> <Rotar: k> <Bajar: espacio>', fill='white')
    figuras(canvas)
    window.mainloop()
def figuras(canvas):
    canvas.create_rectangle(210,10,170,170,fill='black')
    print(random.randrange(7))
#Estructura del juego
window = Tk()
window.title("Welcome")
#Resolucion
wt,hg=420,600
canvas = Canvas(window,width=wt, height=hg)
canvas.pack()
#Ejecutable
main()
