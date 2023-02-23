using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace csharp_Admin.Models
{
    public class DataAllFood
    {
        public List<AllFood> data { get; set; }
    }
    public class AllFood
    {
        public int id { get; set; }
        public string name { get; set; }
        public string type { get; set; }
        public int health_amount { get; set; }
        public int energy_amount { get; set; }
        public int hunger_amount { get; set; }
        public int price { get; set; }
    }
}
