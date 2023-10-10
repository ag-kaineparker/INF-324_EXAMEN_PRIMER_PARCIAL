using System;
using MySql.Data.MySqlClient;

namespace Ejercicio6
{
    public partial class Eliminar: System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {
            if (!IsPostBack)
            {
                BindGridView();
            }
        }

        protected void GridViewEstudiantes_RowCommand(object sender, System.Web.UI.WebControls.GridViewCommandEventArgs e)
        {
            if (e.CommandName == "Modificar")
            {
                string estudianteCI = e.CommandArgument.ToString();
                Response.Redirect($"Modif.aspx?EstudianteCI={estudianteCI}");
            }
            else if (e.CommandName == "Eliminar")
            {
                string estudianteCI = e.CommandArgument.ToString();
                // Eliminar estudiante de la base de datos
                EliminarEstudiante(estudianteCI);
                // Recargar los datos en el GridView
                CargarDatos();
            }
        }

        private void EliminarEstudiante(string estudianteCI)
        {
            // Establecer la cadena de conexión
            string connectionString = "Server=localhost;Database=MIBD_TAPIA;User ID=admin;Password=123456";

            // Eliminar datos de la tabla
            using (MySqlConnection con = new MySqlConnection(connectionString))
            {
                con.Open();
                string query = "DELETE FROM estudiante WHERE EstudianteCI = @EstudianteCI";
                MySqlCommand cmd = new MySqlCommand(query, con);
                cmd.Parameters.AddWithValue("@EstudianteCI", estudianteCI);
                cmd.ExecuteNonQuery();
            }
        }

        private void CargarDatos()
        {
            // Establecer la cadena de conexión
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


        private void BindGridView()
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
}
