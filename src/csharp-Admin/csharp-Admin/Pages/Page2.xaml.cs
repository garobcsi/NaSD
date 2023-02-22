using csharp_Admin.Api;
using csharp_Admin.Models;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Net.Http;
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
    /// Interaction logic for Page2.xaml
    /// </summary>
    public partial class Pages2 : Page
    {
        public static Pages2 Instance { get; set; }
        public Pages2()
        {
            InitializeComponent();
            Instance = this;
        }
        public async static void Load()
        {
            //using (HttpClient client = new HttpClient())
            //{

            //    HttpResponseMessage resp = await client.GetAsync("http://localhost:5000/api/all/clothing");
            //    resp.EnsureSuccessStatusCode();

            //    List<AllClothing> data = serializerForInternal.Deserialize(resp);
            //    Instance.lb1.Content = data[23].id;

            //}
            //RestApiKezelo test = new RestApiKezelo("http://localhost:5000/api/all/clothing");
            //DataAllClothing data = test.GetAllClothing("");
            //Instance.lb1.Content = data.data[20].id;
        }
    }
}
