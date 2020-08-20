import turtle as t

ventana = t.Screen()
ventana.title("Turtle Keys")
pz = t.Turtle()
pz.left(90)

def k1():
    pz.forward(45)

def k2():
    pz.left(90)
    pz.forward(45)
    pz.right(90)
def k3():
    pz.right(90)
    pz.forward(45)
    pz.left(90)

def k4():
    pz.back(45)

ventana.onkey(k1, "Up")
ventana.onkey(k2, "Left")
ventana.onkey(k3, "Right")
ventana.onkey(k4, "Down")

ventana.listen()
ventana.mainloop()