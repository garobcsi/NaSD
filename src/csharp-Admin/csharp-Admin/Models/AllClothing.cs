using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace csharp_Admin.Models
{
    public class DataAllClothing
    {
        public List<AllClothing> data { get; set; }
    }
    public class AllClothing
    {
        public int id { get; set; }
        public string name { get; set; }
        public string type { get; set; }
        public string color { get; set; }
        public int price { get; set; }
    }
}
