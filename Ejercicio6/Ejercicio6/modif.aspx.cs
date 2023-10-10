using MySql.Data.MySqlClient;
using System;
using System.Globalization;

namespace Ejercicio6
{
    public partial class modif : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {
            // Obtener el EstudianteCI de la consulta de la URL
            string estudianteCI = Request.QueryString["EstudianteCI"];

            if (!IsPostBack && !string.IsNullOrEmpty(estudianteCI))
            {
                // Consultar los datos del estudiante y llenar los campos del formulario
                string connectionString = "Server=localhost;Database=MIBD_TAPIA;User ID=admin;Password=123456";
                using (MySqlConnection con = new MySqlConnection(connectionString))
                {
                    con.Open();
                    string query = "SELECT * FROM estudiante WHERE EstudianteCI = @EstudianteCI";
                    MySqlCommand cmd = new MySqlCommand(query, con);
                    cmd.Parameters.AddWithValue("@EstudianteCI", estudianteCI);
                    MySqlDataReader reader = cmd.ExecuteReader();

                    if (reader.Read())
                    {
                        txtEstudianteCI.Text = reader["EstudianteCI"].ToString();
                        txtContraseña.Text = reader["Contraseña"].ToString();
                        txtColor.Text = reader["Color"].ToString();
                        txtNombre.Text = reader["Nombre"].ToString();
                        txtApellido.Text = reader["Apellido"].ToString();
                        txtGenero.Text = reader["Genero"].ToString();
                        txtDepartamento.Text = reader["Departamento"].ToString();
                        txtSemestre.Text = reader["Semestre"].ToString();
                        txtMateria.Text = reader["Materia"].ToString();
                        txtNota.Text = reader["Nota"].ToString();
                    }

                    reader.Close();
                }
            }
        }

        protected void btnGuardar_Click(object sender, EventArgs e)
        {
            // Obtener el EstudianteCI de la consulta de la URL
            string estudianteCI = Request.QueryString["EstudianteCI"];

            // Obtener datos del formulario
            string contraseña = txtContraseña.Text;
            string color = txtColor.Text;
            string nombre = txtNombre.Text;
            string apellido = txtApellido.Text;
            string genero = txtGenero.Text;
            string departamento = txtDepartamento.Text;
            string semestre = txtSemestre.Text;
            string materia = txtMateria.Text;
            int nota = Int32.Parse(txtNota.Text); // Parsear la nota a entero

            // Establecer la cadena de conexión
            string connectionString = "Server=localhost;Database=MIBD_TAPIA;User ID=admin;Password=123456";

            // Actualizar datos en la tabla
            using (MySqlConnection con = new MySqlConnection(connectionString))
            {
                con.Open();
                string query = "UPDATE estudiante SET Contraseña = @Contraseña, Color = @Color, Nombre = @Nombre, Apellido = @Apellido, " +
                               "Genero = @Genero, Departamento = @Departamento, " +
                               "Semestre = @Semestre, Materia = @Materia, Nota = @Nota WHERE EstudianteCI = @EstudianteCI";
                MySqlCommand cmd = new MySqlCommand(query, con);
                cmd.Parameters.AddWithValue("@EstudianteCI", estudianteCI);
                cmd.Parameters.AddWithValue("@Contraseña", contraseña);
                cmd.Parameters.AddWithValue("@Color", color);
                cmd.Parameters.AddWithValue("@Nombre", nombre);
                cmd.Parameters.AddWithValue("@Apellido", apellido);

                cmd.Parameters.AddWithValue("@Genero", genero);
                cmd.Parameters.AddWithValue("@Departamento", departamento);
                cmd.Parameters.AddWithValue("@Semestre", semestre);
                cmd.Parameters.AddWithValue("@Materia", materia);
                cmd.Parameters.AddWithValue("@Nota", nota);

                cmd.ExecuteNonQuery();
            }

            // Redirigir a la página de éxito o a otra página después de la actualización
            Response.Redirect("Eliminar.aspx");
        }
    }
}
