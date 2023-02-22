using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Linq;
using System.Runtime.CompilerServices;
using System.Text;
using System.Threading.Tasks;
using System.Windows;

namespace csharp_Admin.ViewModels
{
    public class MainWindowModel : INotifyPropertyChanged
    {

        #region PageVisibilityModel

        private Visibility visibility_Page1 = Visibility.Visible;
        private Visibility visibility_Page2 = Visibility.Hidden;
        private Visibility visibility_Page3 = Visibility.Hidden;
        private Visibility visibility_Page4 = Visibility.Hidden;
        private Visibility visibility_Page5 = Visibility.Hidden;
        private Visibility visibility_Page6 = Visibility.Hidden;
        public Visibility Visibility_Page1
        {
            get
            {
                return visibility_Page1;
            }
            set
            {
                visibility_Page1 = value;
                PropertyChangedHandler(nameof(visibility_Page1));
            }
        }
        public Visibility Visibility_Page2
        {
            get
            {
                return visibility_Page2;
            }
            set
            {
                visibility_Page2 = value;
                PropertyChangedHandler(nameof(visibility_Page2));
            }
        }
        public Visibility Visibility_Page3
        {
            get
            {
                return visibility_Page3;
            }
            set
            {
                visibility_Page3 = value;
                PropertyChangedHandler(nameof(visibility_Page3));
            }
        }
        public Visibility Visibility_Page4
        {
            get
            {
                return visibility_Page4;
            }
            set
            {
                visibility_Page4 = value;
                PropertyChangedHandler(nameof(visibility_Page4));
            }
        }
        public Visibility Visibility_Page5
        {
            get
            {
                return visibility_Page5;
            }
            set
            {
                visibility_Page5 = value;
                PropertyChangedHandler(nameof(visibility_Page5));
            }
        }
        public Visibility Visibility_Page6
        {
            get
            {
                return visibility_Page6;
            }
            set
            {
                visibility_Page6 = value;
                PropertyChangedHandler(nameof(visibility_Page6));
            }
        }
        public void MakeVisible(string s)
        {
            visibility_Page1 = s == "Page1" ? Visibility.Visible : Visibility.Hidden;
            PropertyChangedHandler(nameof(visibility_Page1));
            visibility_Page2 = s == "Page2" ? Visibility.Visible : Visibility.Hidden;
            PropertyChangedHandler(nameof(visibility_Page2));
            visibility_Page3 = s == "Page3" ? Visibility.Visible : Visibility.Hidden;
            PropertyChangedHandler(nameof(visibility_Page3));
            visibility_Page4 = s == "Page4" ? Visibility.Visible : Visibility.Hidden;
            PropertyChangedHandler(nameof(visibility_Page4));
            visibility_Page5 = s == "Page5" ? Visibility.Visible : Visibility.Hidden;
            PropertyChangedHandler(nameof(visibility_Page5));
            visibility_Page6 = s == "Page6" ? Visibility.Visible : Visibility.Hidden;
            PropertyChangedHandler(nameof(visibility_Page6));
        }
        #endregion
        public event PropertyChangedEventHandler PropertyChanged;
        void PropertyChangedHandler([CallerMemberName] string property = "")
        {
            PropertyChanged?.Invoke(this, new PropertyChangedEventArgs(property));
        }
    }
}
