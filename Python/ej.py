import turtle as t
ventana = t.Screen()
ventana.title("Turtle Keys")
pz = t.Turtle()
pz.left(90)
def arriba():
    pz.forward(20)
def izquierda():
    pos = pz.pos()
    x=pos[0]
    y=pos[1]
    pz.goto(x-20,y)
def derecha():
    pos = pz.pos()
    x=pos[0]
    y=pos[1]
    pz.goto(x+20,y)
def abajo():
    pz.back(20)
ventana.onkey(arriba, "Up")
ventana.onkey(izquierda, "Left")
ventana.onkey(derecha, "Right")
ventana.onkey(abajo, "Down")
ventana.listen()
ventana.mainloop()