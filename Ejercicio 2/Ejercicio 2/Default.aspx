<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="Default.aspx.cs" Inherits="Ejercicio_2.Default" %>

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
            <a href="InfCarrera.aspx" class="boton-enlace">Informacion de la Carrera</a>
            <a href="InfKardex.aspx" class="boton-enlace">Informacion de Kardex</a>
            <a href="InfInsti.aspx" class="boton-enlace">Informacion del Instituto de investigacion</a>
        </div>
    </form>
</body>
</html>
