using System;
using MySql.Data.MySqlClient;

namespace NombreDeTuProyecto
{
    public partial class InfKardex : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {
            if (!IsPostBack)
            {
                string connectionString = "Server=localhost;Database=MIBD_TAPIA;User ID=admin;Password=123456";
                using (MySqlConnection con = new MySqlConnection(connectionString))
                {
                    con.Open();
                    string query = "SELECT * FROM kardex";
                    MySqlCommand cmd = new MySqlCommand(query, con);
                    MySqlDataReader reader = cmd.ExecuteReader();
                    if (reader.Read())
                    {
                        LiteralHorarios.Text = "<p><strong>Horarios:</strong> " + reader["Horarios"].ToString() + "</p>";
                        LiteralTelefono.Text = reader["Telefono"].ToString();
                    }
                    reader.Close();
                }
            }
        }
    }
}
