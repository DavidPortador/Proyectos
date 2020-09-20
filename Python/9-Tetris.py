                                    ###########################
                                    #Teris; By: David Portador#
                                    ###########################
import turtle as t
import time
import random
# Coniguracion de la ventana principal
ventana = t.Screen()
ventana.title("Tetris by DP")
class piezas():
    # Genera un pieza aleatoria en las posiciones dadas
    # Metodo constructor
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
        cont=0
        while (cont<23):
            time.sleep(1)
            self.bajar(pz,pz2,pz3,pz4)
            cont+=1
            #ventana.onkey(arriba, "Up")
            ventana.onkey(self.izquierda(pz), "Left")
            #ventana.onckey(derecha, "Right")
            #ventana.onkey(abajo, "Down")
            ventana.listen()
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
    def bajar(self,pz,pz2,pz3,pz4):
        ps1=pz.pos()
        x1=ps1[0]
        y1=ps1[1]
        ps2=pz2.pos()
        x2=ps2[0]
        y2=ps2[1]
        ps3=pz3.pos()
        x3=ps3[0]
        y3=ps3[1]
        ps4=pz4.pos()
        x4=ps4[0]
        y4=ps4[1]
        pz.goto(x1,y1-20)
        pz2.goto(x2,y2-20)
        pz3.goto(x3,y3-20)
        pz4.goto(x4,y4-20)
    # Movimientos
    def izquierda(self,pz):
        pos = pz.pos()
        x=pos[0]
        y=pos[1]
        pz.goto(x-20,y)
class tablero():
    def __init__(self):
        # Aquí se crean las piezas base (sin forma)
        self.techo()
        self.ladoizq()
        self.base()
        self.ladoder()
    def techo(self):
        pzs = []
        px=-120
        py=275
        for i in range(13):
            pzs = t.Turtle()
            pzs.penup()
            pzs.speed(0)
            pzs.shape('square')
            pzs.fillcolor("gray")
            pzs.goto(px,py)
            px+=20
    def ladoizq(self):
        pzs = []
        px=-120
        py=255
        for i in range(25):
            pzs = t.Turtle()
            pzs.penup()
            pzs.speed(0)
            pzs.shape('square')
            pzs.fillcolor("gray")
            pzs.goto(px,py)
            py-=20
    def base(self):
        pzs = []
        px=-120
        py=-245
        for i in range(13):
            pzs = t.Turtle()
            pzs.penup()
            pzs.speed(0)
            pzs.shape('square')
            pzs.fillcolor("gray")
            pzs.goto(px,py)
            px+=20
    def ladoder(self):
        pzs = []
        px=120
        py=255
        for i in range(25):
            pzs = t.Turtle()
            pzs.penup()
            pzs.speed(0)
            pzs.shape('square')
            pzs.fillcolor("gray")
            pzs.goto(px,py)
            py-=20
def arriba():
    pz.forward(20)
def derecha():
    pos = pz.pos()
    x=pos[0]
    y=pos[1]
    pz.goto(x+20,y)
def abajo():
    pz.back(20)
def main():
    #Esta linea genera el tablero
    tablero()
    # Se genera una pieza en la posicion dada
    cont=0
    while (cont<6):
        nuevapieza = piezas(0,235)
        cont+=1
    ventana.mainloop()
# Keyboard
#pz = t.Turtle()
#pz.left(90)
"""
ventana.onkey(arriba, "Up")
ventana.onkey(izquierda, "Left")
ventana.onkey(derecha, "Right")
ventana.onkey(abajo, "Down")
ventana.listen()"""
main()