using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace csharp_Admin.Models
{
    public class DataAdminAllCreatures
    {
        public List<AdminAllCreatures> data { get; set; }
    }
    public class AdminAllCreatures
    {
        public int id { get; set; }
        public int user_id { get; set; }
        public int money { get; set; }
        public int hunger { get; set; }
        public int health { get; set; }
        public int mood { get; set; }
        public int energy { get; set; }
        public int cleanness { get; set; }
        public string created_at { get; set; }
        public string updated_at { get; set; }
    }
}
