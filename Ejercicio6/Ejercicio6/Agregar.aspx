<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="Agregar.aspx.cs" Inherits="Ejercicio6.Agregar" %>

<!DOCTYPE html>

<html lang="en">

<head runat="server">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lista de Estudiantes</title>
    <link rel="stylesheet" href="Styles/estilo.css" />
    <style>
        /* Estilo para la tabla */
        .styled-table {
            width: 50%; /* Ancho de la tabla */
            margin: 20px 0;
            font-size: 12px; /* Tamaño de fuente más pequeño */
            border-collapse: collapse;
            text-align: left;
        }

        /* Estilo para las filas de la tabla */
        .styled-table th,
        .styled-table td {
            padding: 6px; /* Espaciado interno más pequeño */
            border-bottom: 1px solid #ddd;
        }

        /* Estilo para las filas alternas (para un mejor contraste) */
        .styled-table tr:nth-child(even) {
            background-color: #a8e2a1;
        }

        /* Estilo para las filas al pasar el mouse por encima */
        .styled-table tr:hover {
            background-color: #f4f4f4;
        }
        body {
            background-color: #f0f0f0; 
        }
    </style>
</head>


<body>
    <form id="form1" runat="server">
        <div >
   <asp:GridView ID="GridViewEstudiantes" runat="server" AutoGenerateColumns="True" CssClass="styled-table">
</asp:GridView>

<asp:Button ID="btnIrANuevaPagina" class="boton-enlace" runat="server" Text="Agregar nuevo"  OnClick="btnIrANuevaPagina_Click" />
 <a href="Default.aspx" class="boton-enlace">Atras</a>

        </div>
    </form>
</body>

</html>
