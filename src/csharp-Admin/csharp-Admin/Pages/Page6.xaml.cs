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
    /// Interaction logic for Page6.xaml
    /// </summary>
    public partial class Pages6 : Page
    {
        public static Pages6 Instance { get; set; }
        public Pages6()
        {
            InitializeComponent();
            Instance = this;
        }
    }
}
