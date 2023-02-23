using csharp_Admin.Models;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Net.Http;
using System.Net.Http.Headers;
using System.Text;
using System.Text.Json;
using System.Threading.Tasks;

namespace csharp_Admin.Api
{
    public class RestApiKezeloBearerToken
    {
        HttpClient client = new HttpClient();
        public RestApiKezeloBearerToken()
        {
            client.BaseAddress = new Uri("http://localhost:5000");
            client.DefaultRequestHeaders.Accept.Clear();
            client.DefaultRequestHeaders
                .Accept
                .Add(new MediaTypeWithQualityHeaderValue("application/json"));
            client.DefaultRequestHeaders.Add("Authorization", "Bearer 4KXakKYnBSPJMfGFjNj04qhAYR0CP4O0KHAMkmSg"); //admin user
        }
        public DataAdminAllUsers GetAdminAllUsers()
        {
            DataAdminAllUsers retval = null;
            HttpResponseMessage response = client.GetAsync("/api/admin/all/users").Result;
            if (response.IsSuccessStatusCode)
            {
                retval = response.Content.ReadAsAsync<DataAdminAllUsers>().Result;
            }
            return retval;
        }
        public DataAdminAllCreatures GetAdminAllCreatures()
        {
            DataAdminAllCreatures retval = null;
            HttpResponseMessage response = client.GetAsync("/api/admin/all/creatures").Result;
            if (response.IsSuccessStatusCode)
            {
                retval = response.Content.ReadAsAsync<DataAdminAllCreatures>().Result;
            }
            return retval;
        }
        public DataAdminAllUsersFood GetAdminAllUsersFood()
        {
            DataAdminAllUsersFood retval = null;
            HttpResponseMessage response = client.GetAsync("/api/admin/all/food").Result;
            if (response.IsSuccessStatusCode)
            {
                retval = response.Content.ReadAsAsync<DataAdminAllUsersFood>().Result;
            }
            return retval;
        }
        public DataAdminAllUsersClothing GetAdminAllUsersClothing()
        {
            DataAdminAllUsersClothing retval = null;
            HttpResponseMessage response = client.GetAsync("/api/admin/all/clothing").Result;
            if (response.IsSuccessStatusCode)
            {
                retval = response.Content.ReadAsAsync<DataAdminAllUsersClothing>().Result;
            }
            return retval;
        }
    }
}
