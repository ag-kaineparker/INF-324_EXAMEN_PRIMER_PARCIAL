using System;
using System.Web.UI;
using System.Data.SqlClient;
using MySql.Data.MySqlClient;

namespace Ejercicio6
{
    //Se instalo Install-Package MySql.Data
    public partial class Default : Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {
            if (!IsPostBack)
            {
                string connectionString = "Server=localhost;Database=mibd_tapia;User ID=admin;Password=123456";
                using (MySqlConnection con = new MySqlConnection(connectionString))
                {
                    con.Open();
                    string query = "SELECT * FROM Estudiante";
                    MySqlCommand cmd = new MySqlCommand(query, con);
                    MySqlDataReader reader = cmd.ExecuteReader();



                    reader.Close();
                }
            }
        }
    }
}
