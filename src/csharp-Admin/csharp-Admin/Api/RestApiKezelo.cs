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
            client.BaseAddress = new Uri("http://localhost:5000/");
            client.DefaultRequestHeaders.Accept.Clear();
            client.DefaultRequestHeaders
                .Accept
                .Add(new MediaTypeWithQualityHeaderValue("application/json"));

        }
        public DataAllClothing GetAllClothing(string path)
        {
            DataAllClothing retval = null;
            HttpResponseMessage response = client.GetAsync(path).Result;
            if (response.IsSuccessStatusCode)
            {
                retval = response.Content.ReadAsAsync<DataAllClothing>().Result;
            }
            return retval;
        }
    }
}
