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
    /// Interaction logic for Page4.xaml
    /// </summary>
    public partial class Pages4 : Page
    {
        public static Pages4 Instance { get; set; }
        public Pages4()
        {
            InitializeComponent();
            Instance = this;
        }
        class UserClothing
        {
            public int id_user { get; set; }
            public string name_user { get; set; }
            public string email_user { get; set; }
            public string name_clothing { get; set; }
            public string type_clothing { get; set; }
            public string color_clothing { get; set; }
            public int price_clothing { get; set; }

            public UserClothing(int user_id,string name_user,string email_user,string name_clothing,string type_clothing,string color_clothing,int price_clothing)
            {
                this.id_user = user_id;
                this.name_user = name_user;
                this.email_user = email_user;
                this.name_clothing = name_clothing;
                this.type_clothing = type_clothing;
                this.color_clothing = color_clothing;
                this.price_clothing = price_clothing;
            }
        }
        public static void Load()
        {
            RestApiKezeloBearerToken api_token = new RestApiKezeloBearerToken();
            RestApiKezelo api = new RestApiKezelo();
            DataAdminAllUsersClothing resp = api_token.GetAdminAllUsersClothing();

            List<UserClothing> data = new List<UserClothing>();
            foreach (var item in resp.data)
            {
                AdminAllUsers user_resp = api_token.GetAdminAllUsers().data.Find(x=>x.id == item.creature_id);
                AllClothing clothing_resp = api.GetAllClothing().data.Find(x=>x.id == item.clothing_id);
                data.Add(new UserClothing(user_resp.id,user_resp.name,user_resp.email,clothing_resp.name,clothing_resp.type,clothing_resp.color,clothing_resp.price));
                
            }
            Instance.DG.ItemsSource = data;
        }
    }
}
