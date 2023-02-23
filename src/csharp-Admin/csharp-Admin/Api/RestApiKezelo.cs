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
    public class RestApiKezelo
    {
        HttpClient client = new HttpClient();
        public RestApiKezelo()
        {
            client.BaseAddress = new Uri("http://localhost:5000");
            client.DefaultRequestHeaders.Accept.Clear();
            client.DefaultRequestHeaders
                .Accept
                .Add(new MediaTypeWithQualityHeaderValue("application/json"));

        }
        public DataAllFood GetAllFood()
        {
            DataAllFood retval = null;
            HttpResponseMessage response = client.GetAsync("/api/all/food").Result;
            if (response.IsSuccessStatusCode)
            {
                retval = response.Content.ReadAsAsync<DataAllFood>().Result;
            }
            return retval;
        }
        public DataAllClothing GetAllClothing()
        {
            DataAllClothing retval = null;
            HttpResponseMessage response = client.GetAsync("/api/all/clothing").Result;
            if (response.IsSuccessStatusCode)
            {
                retval = response.Content.ReadAsAsync<DataAllClothing>().Result;
            }
            return retval;
        }
    }
}
