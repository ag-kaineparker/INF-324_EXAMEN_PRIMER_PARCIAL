<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="Default.aspx.cs" Inherits="Ejercicio6.Default" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>Título de tu página</title>
    <link rel="stylesheet" href="Styles/estilo.css" />
</head>

<body>
    <form id="form1" runat="server">
        <table>
            <asp:Literal ID="tablaEstudiantes" runat="server"></asp:Literal>
        </table>

        <div class="container">
            <h1>BIENVENIDO</h1>
        </div>

        <div class="boton-container">
            <a href="Agregar.aspx" class="boton-enlace">Agregar</a>
            <a href="Eliminar.aspx" class="boton-enlace">Eliminar/Actualizar</a>
        </div>
    </form>
</body>
</html>
