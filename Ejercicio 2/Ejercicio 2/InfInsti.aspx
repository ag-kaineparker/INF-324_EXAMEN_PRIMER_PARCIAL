<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="InfInsti.aspx.cs" Inherits="NombreDeTuProyecto.InfInsti" %>

<!DOCTYPE html>

<html lang="en">

<head runat="server">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Detalles del Instituto</title>
    <link rel="stylesheet" href="Styles/estilo.css" />
</head>

<body class="inf">
    <form id="form1" runat="server">
        <div class="container_inf">
            <div class="card">
                <asp:Literal ID="LiteralNombreInstituto" runat="server"></asp:Literal>
                <p><strong>Ubicación:</strong> <asp:Literal ID="LiteralUbicacion" runat="server"></asp:Literal></p>
                <p><strong>Director:</strong> <asp:Literal ID="LiteralDirector" runat="server"></asp:Literal></p>
            </div>
            <div class="container_inf">
                <asp:HyperLink ID="HyperLinkAtras" runat="server" NavigateUrl="~/Default.aspx" CssClass="boton-enlace" Text="ATRAS" />
            </div>
        </div>
    </form>
</body>

</html>
