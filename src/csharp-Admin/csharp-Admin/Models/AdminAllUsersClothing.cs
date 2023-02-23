using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace csharp_Admin.Models
{
    public class DataAdminAllUsersClothing
    {
        public List<AdminAllUsersClothing> data { get; set; }
    }
    public class AdminAllUsersClothing
    {
        public int id { get; set; }
        public int creature_id { get; set; }
        public int clothing_id { get; set; }
    }
}
