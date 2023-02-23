using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace csharp_Admin.Models
{
    public class DataAdminAllUsers
    {
        public List<AdminAllUsers> data { get; set; }
    }
    public class AdminAllUsers
    {
        public int id { get; set; }
        public string name { get; set; }
        public string email { get; set; }
        public string email_verified_at { get; set; }
        public string created_at { get; set; }
        public string updated_at { get; set; }
    }
}
