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
    /// Interaction logic for Page3.xaml
    /// </summary>
    public partial class Pages3 : Page
    {
        public static Pages3 Instance { get; set; }
        public Pages3()
        {
            InitializeComponent();
            Instance = this;
        }
        public static void Load()
        {
            RestApiKezeloBearerToken api = new RestApiKezeloBearerToken();
            DataAdminAllCreatures resp = api.GetAdminAllCreatures();
            Instance.DG.ItemsSource = resp.data;

        }
    }
}
