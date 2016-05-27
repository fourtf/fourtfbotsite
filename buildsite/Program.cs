using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Text;

namespace buildsite
{
    class Program
    {
        static void Main(string[] args)
        {
            List<Tuple<string, string>> replaceLines = new List<Tuple<string, string>>();

            try
            {
                foreach (string x in File.ReadAllLines("buildsite.replace"))
                {
                    int index;
                    if ((index = x.IndexOf('=')) != -1)
                    {
                        replaceLines.Add(Tuple.Create(x.Remove(index), x.Substring(index + 1)));
                    }
                }
            }
            catch (Exception exc)
            {
                Console.WriteLine(exc.Message);
            }

            try
            {
                string _base = File.ReadAllText("base.html");
                foreach (string s in Directory.EnumerateFiles("."))
                {
                    try
                    {
                        if (s.EndsWith(".html.php"))
                        {
                            string scriptPath = s.Replace(".html.php", ".js.php");

                            if (File.Exists(scriptPath))
                            {
                                string text = _base.Replace("\"{content}\"", File.ReadAllText(s)).Replace("\"{script}\"", File.ReadAllText(scriptPath));

                                foreach (var x in replaceLines)
                                    text = text.Replace(x.Item1, x.Item2);

                                File.WriteAllText(s.Replace(".html.php", ".php"), text);
                                Console.WriteLine("built " + s.Replace(".html.php", ".php"));
                            }
                        }
                    }
                    catch (Exception exc)
                    {
                        Console.WriteLine(exc.Message);
                    }
                }
            }
            catch (Exception exc)
            {
                Console.WriteLine(exc.Message);
            }
        }
    }
}
