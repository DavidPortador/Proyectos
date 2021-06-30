using System;
using Gtk;

namespace Example
{
    class MainClass
    {
        public static void Main(string[] args)
        {
            Application.Init();
            MainWindow win = new MainWindow();
            Label lbl = new Label("Hello World GUI");
            win.Add(lbl);
            win.ShowAll();
            Application.Run();
        }
    }
}
