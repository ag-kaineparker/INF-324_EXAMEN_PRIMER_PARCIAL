using MySql.Data.MySqlClient;
using System;

namespace Ejercicio6
{
    public partial class Formu : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {
        }

        protected void btnGuardar_Click(object sender, EventArgs e)
{
    // Obtener datos del formulario
    string estudianteCI = txtEstudianteCI.Text;
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

    // Insertar datos en la tabla
    using (MySqlConnection con = new MySqlConnection(connectionString))
    {
        con.Open();
        string query = "INSERT INTO estudiante (EstudianteCI, Contraseña, Color, Nombre, Apellido, Genero, Departamento, Semestre, Materia, Nota) " +
                       "VALUES (@EstudianteCI, @Contraseña, @Color, @Nombre, @Apellido,  @Genero, @Departamento, @Semestre, @Materia, @Nota)";
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

    // Redirigir a la página de éxito o a otra página después de la inserción
    Response.Redirect("Agregar.aspx");
}
    }
}