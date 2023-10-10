<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="Formu.aspx.cs" Inherits="Ejercicio6.Formu" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Formulario de Estudiante</title>
</head>
<body>
    <form id="form1" runat="server">
        <div>
            <h2>Formulario de Nuevo Estudiante</h2>
            <div>
                <label for="txtEstudianteCI">EstudianteCI:</label>
<asp:TextBox ID="txtEstudianteCI" runat="server" /><br />

<label for="txtContraseña">Contraseña:</label>
<asp:TextBox ID="txtContraseña" runat="server" TextMode="Password" /><br />

<label for="txtColor">Color:</label>
<asp:TextBox ID="txtColor" runat="server" /><br />
                <label for="txtNombre">Nombre:</label>
                <asp:TextBox ID="txtNombre" runat="server" /><br />
                
                <label for="txtApellido">Apellido:</label>
                <asp:TextBox ID="txtApellido" runat="server" /><br />

                
                <label for="txtGenero">Género:</label>
                <asp:TextBox ID="txtGenero" runat="server" /><br />
                
                <label for="txtDepartamento">Departamento:</label>
                <asp:TextBox ID="txtDepartamento" runat="server" /><br />
                
                <label for="txtSemestre">Semestre:</label>
                <asp:TextBox ID="txtSemestre" runat="server" /><br />
                
                <label for="txtMateria">Materia:</label>
                <asp:TextBox ID="txtMateria" runat="server" /><br />
                
                <label for="txtNota">Nota:</label>
                <asp:TextBox ID="txtNota" runat="server" /><br />
                
                <asp:Button ID="btnGuardar" runat="server" Text="Guardar Estudiante" OnClick="btnGuardar_Click" />
            </div>
        </div>
    </form>
</body>
</html>
