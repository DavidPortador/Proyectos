import turtle as t
import time
import random
# Metodos
class main():
    def __init__(self):
        ventana = t.Screen()
        ventana.title("Turtle Keys")
        pie = pieza(10,15)
        ventana.mainloop()
class pieza():
    def __init__(self,x,y):
        # Aquí se crean las piezas base (sin forma)
        pz = t.Turtle()
        pz2 = t.Turtle()
        pz3 = t.Turtle()
        pz4 = t.Turtle()
        # Aquí se les da forma a las piezas
        opc=random.randrange(7)
        # De manera aleatoria se genera una pieza de color distinto
        if(opc==0):
            self.formato(pz,pz2,pz3,pz4,"red")
            self.fcubo(pz,pz2,pz3,pz4,x,y)
        else:
            if(opc==1):
                self.formato(pz,pz2,pz3,pz4,"cyan")
                self.fpalo(pz,pz2,pz3,pz4,x,y)
            else:
                if(opc==2):
                    self.formato(pz,pz2,pz3,pz4,"blue")
                    self.fese(pz,pz2,pz3,pz4,x,y)
                else:
                    if(opc==3):
                        self.formato(pz,pz2,pz3,pz4,"purple")
                        self.fte(pz,pz2,pz3,pz4,x,y)
                    else:
                        if(opc==4):
                            self.formato(pz,pz2,pz3,pz4,"green")
                            self.fdos(pz,pz2,pz3,pz4,x,y)
                        else:
                            if(opc==5):
                                self.formato(pz,pz2,pz3,pz4,"orange")
                                self.fele(pz,pz2,pz3,pz4,x,y)
                            else:
                                if(opc==6):
                                    self.formato(pz,pz2,pz3,pz4,"yellow")
                                    self.felei(pz,pz2,pz3,pz4,x,y)
    def formato(self,pz,pz2,pz3,pz4,color):
        # No dejar rastro
        pz.penup()
        pz2.penup()
        pz3.penup()
        pz4.penup()
        # La forma de cada cuadro
        pz.shape('square')
        pz2.shape('square')
        pz3.shape('square')
        pz4.shape('square')
        # Color de la figra
        pz.fillcolor(color)
        pz2.fillcolor(color)
        pz3.fillcolor(color)
        pz4.fillcolor(color)
        # Velocidad
        pz.speed(0)
        pz2.speed(0)
        pz3.speed(0)
        pz4.speed(0)
    def fcubo(self,pz,pz2,pz3,pz4,x,y):
        pz.goto(x,y)
        pz2.goto(x-20,y)
        pz3.goto(x-20,y+20)
        pz4.goto(x,y+20)
    def fpalo(self,pz,pz2,pz3,pz4,x,y):
        pz.goto(x,y)
        pz2.goto(x,y+20)
        pz3.goto(x,y+40)
        pz4.goto(x,y+60)
    def fese(self,pz,pz2,pz3,pz4,x,y):
        pz.goto(x,y)
        pz2.goto(x,y+20)
        pz3.goto(x-20,y)
        pz4.goto(x+20,y+20)
    def fte(self,pz,pz2,pz3,pz4,x,y):
        pz.goto(x,y)
        pz2.goto(x,y+20)
        pz3.goto(x-20,y+20)
        pz4.goto(x+20,y+20)
    def fdos(self,pz,pz2,pz3,pz4,x,y):
        pz.goto(x,y)
        pz2.goto(x,y+20)
        pz3.goto(x-20,y+20)
        pz4.goto(x+20,y)
    def fele(self,pz,pz2,pz3,pz4,x,y):
        pz.goto(x,y)
        pz2.goto(x,y+20)
        pz3.goto(x,y+40)
        pz4.goto(x+20,y)
    def felei(self,pz,pz2,pz3,pz4,x,y):
        pz.goto(x,y)
        pz2.goto(x,y+20)
        pz3.goto(x,y+40)
        pz4.goto(x-20,y)
    def get_Piezas(self,pz):
        return pz
main()