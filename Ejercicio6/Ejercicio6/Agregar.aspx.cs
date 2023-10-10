using System;
using MySql.Data.MySqlClient;

namespace Ejercicio6
{
    public partial class Agregar : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {
            if (!IsPostBack)
            {
                string connectionString = "Server=localhost;Database=MIBD_TAPIA;User ID=admin;Password=123456";
                using (MySqlConnection con = new MySqlConnection(connectionString))
                {
                    con.Open();
                    string query = "SELECT EstudianteCI, Nombre, Apellido, Genero, Departamento, Semestre, Materia, Nota FROM estudiante";
                    MySqlCommand cmd = new MySqlCommand(query, con);
                    MySqlDataReader reader = cmd.ExecuteReader();

                    GridViewEstudiantes.DataSource = reader;
                    GridViewEstudiantes.DataBind();

                    reader.Close();
                }
            }
        }
        protected void btnIrANuevaPagina_Click(object sender, EventArgs e)
        {
            Response.Redirect("Formu.aspx");   }

    }
}
