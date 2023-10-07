<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="InfKardex.aspx.cs" Inherits="NombreDeTuProyecto.InfKardex" %>

<!DOCTYPE html>

<html lang="en">

<head runat="server">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Detalles del Kardex</title>
    <link rel="stylesheet" href="Styles/estilo.css" />
</head>

<body class="inf">
    <form id="form1" runat="server">
        <div class="container_inf">
            <div class="card">
                <h2>INFORMACION DE KARDEX</h2>
                <asp:Literal ID="LiteralHorarios" runat="server"></asp:Literal>
                <p><strong>Teléfono:</strong> <asp:Literal ID="LiteralTelefono" runat="server"></asp:Literal></p>
            </div>
            <div class="container_inf">
                <asp:HyperLink ID="HyperLinkAtras" runat="server" NavigateUrl="~/Default.aspx" CssClass="boton-enlace" Text="ATRAS" />
            </div>
        </div>
    </form>
</body>

</html>
