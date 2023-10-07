using System;
using MySql.Data.MySqlClient;

namespace NombreDeTuProyecto
{
    public partial class InfCarrera : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {
            if (!IsPostBack)
            {
                string connectionString = "Server=localhost;Database=MIBD_TAPIA;User ID=admin;Password=123456";
                using (MySqlConnection con = new MySqlConnection(connectionString))
                {
                    con.Open();
                    string query = "SELECT * FROM carrera";
                    MySqlCommand cmd = new MySqlCommand(query, con);
                    MySqlDataReader reader = cmd.ExecuteReader();
                    if (reader.Read())
                    {
                        LiteralNombreCarrera.Text = "<h2>" + reader["NombreCarrera"].ToString() + "</h2>";
                        LiteralDuracion.Text = reader["Duracion"].ToString();
                        LiteralFacultad.Text = reader["Facultad"].ToString();
                    }
                    reader.Close();
                }
            }
        }
    }
}
