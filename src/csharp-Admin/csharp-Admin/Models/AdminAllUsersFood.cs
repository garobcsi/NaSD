using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace csharp_Admin.Models
{
    public class DataAdminAllUsersFood
    {
        public List<AdminAllUsersFood> data { get; set; }
    }
    public class AdminAllUsersFood
    {
        public int id { get; set; }
        public int creature_id { get; set; }
        public int food_id { get; set; }
        public int amount { get; set; }
    }
}
