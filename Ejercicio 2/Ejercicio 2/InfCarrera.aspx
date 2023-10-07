<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="InfCarrera.aspx.cs" Inherits="NombreDeTuProyecto.InfCarrera" %>

<!DOCTYPE html>

<html lang="en">

<head runat="server">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Carrera Detalles</title>
    <link rel="stylesheet" href="Styles/estilo.css" />
</head>

<body class="inf">
    <form id="form1" runat="server">
        <div class="container_inf">
            <div class="card">
                <asp:Literal ID="LiteralNombreCarrera" runat="server"></asp:Literal>
                <p><strong>Duración:</strong> <asp:Literal ID="LiteralDuracion" runat="server"></asp:Literal> años</p>
                <p><strong>Facultad:</strong> <asp:Literal ID="LiteralFacultad" runat="server"></asp:Literal></p>
            </div>
            <div class="container_inf">
                <asp:HyperLink ID="HyperLinkAtras" runat="server" NavigateUrl="~/Default.aspx" CssClass="boton-enlace" Text="ATRAS" />
            </div>
        </div>
    </form>
</body>

</html>
