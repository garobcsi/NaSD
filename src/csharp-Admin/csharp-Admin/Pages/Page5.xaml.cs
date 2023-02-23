using csharp_Admin.Api;
using csharp_Admin.Models;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Data;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Imaging;
using System.Windows.Navigation;
using System.Windows.Shapes;

namespace csharp_Admin.Pages
{
    /// <summary>
    /// Interaction logic for Page5.xaml
    /// </summary>
    public partial class Pages5 : Page
    {
        public static Pages5 Instance { get; set; }
        public Pages5()
        {
            InitializeComponent();
            Instance = this;
        }
        class UserFood
        {
            public int id_user { get; set; }
            public string name_user { get; set; }
            public string email_user { get; set; }
            public string food_name { get; set; }
            public string food_type { get; set; }
            public int food_health_amount { get; set; }
            public int food_energy_amount { get; set; }
            public int food_hunger_amount { get; set; }
            public int food_price { get; set; }
            public int amount { get; set; }

            public UserFood(int user_id, string name_user, string email_user,string food_name,string food_type,int food_health_amount,int food_energy_amount, int food_hunger_amount, int food_price,int amount)
            {
                this.id_user = user_id;
                this.name_user = name_user;
                this.email_user = email_user;
                this.food_name = food_name;
                this.food_type = food_type;
                this.food_health_amount = food_health_amount;
                this.food_energy_amount = food_energy_amount;
                this.food_hunger_amount = food_hunger_amount;
                this.food_price = food_price;
                this.amount = amount;
            }
        }
        public static void Load()
        {
            RestApiKezeloBearerToken api_token = new RestApiKezeloBearerToken();
            RestApiKezelo api = new RestApiKezelo();
            DataAdminAllUsersFood resp = api_token.GetAdminAllUsersFood();

            List<UserFood> data = new List<UserFood>();
            AdminAllUsers user_resp = null;
            AllFood food_resp = null;
            foreach (var item in resp.data)
            {
                if (user_resp == null || user_resp.id != item.creature_id)
                {
                    user_resp = api_token.GetAdminAllUsers().data.Find(x => x.id == item.creature_id);

                }
                if (food_resp == null || food_resp.id != item.food_id)
                {
                    food_resp = api.GetAllFood().data.Find(x => x.id == item.food_id);

                }

                data.Add(new UserFood(user_resp.id, user_resp.name, user_resp.email,food_resp.name,food_resp.type,food_resp.health_amount,food_resp.energy_amount,food_resp.hunger_amount,food_resp.price,item.amount));

            }
            Instance.DG.ItemsSource = data;
        }
    }
}
