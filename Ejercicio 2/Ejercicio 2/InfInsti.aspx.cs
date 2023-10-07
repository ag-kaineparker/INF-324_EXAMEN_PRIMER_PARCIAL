using System;
using MySql.Data.MySqlClient;

namespace NombreDeTuProyecto
{
    public partial class InfInsti : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {
            if (!IsPostBack)
            {
                string connectionString = "Server=localhost;Database=MIBD_TAPIA;User ID=admin;Password=123456";
                using (MySqlConnection con = new MySqlConnection(connectionString))
                {
                    con.Open();
                    string query = "SELECT * FROM institutoinvestigacion";
                    MySqlCommand cmd = new MySqlCommand(query, con);
                    MySqlDataReader reader = cmd.ExecuteReader();
                    if (reader.Read())
                    {
                        LiteralNombreInstituto.Text = "<h2>" + reader["NombreInstituto"].ToString() + "</h2>";
                        LiteralUbicacion.Text = reader["Ubicacion"].ToString();
                        LiteralDirector.Text = reader["Director"].ToString();
                    }
                    reader.Close();
                }
            }
        }
    }
}
